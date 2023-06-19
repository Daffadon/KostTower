<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Log_Transaksi;
use App\Models\Penyewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function showKamarToSewa()
    {
        $availableKamar = Kamar::whereNotIn('kode_kamar', function ($query) {
            $query->select('kode_kamar')
                ->from('log_transaksi')
                ->where('tanggal_keluar', '>=', date('Y-m-d'));
        })->get();
        $listKamar = Kamar::all();
        return view('pages.sewa.kamarSewa', compact('availableKamar', 'listKamar'));
    }
    public function updateSewaView(int $log_transaksi_id)
    {
        $logToUpdate = Log_Transaksi::where('id', $log_transaksi_id)->first();
        $list_penyewa = Penyewa::leftJoin('log_transaksi', 'penyewa.nik', '=', 'log_transaksi.nik')
            ->whereNull('log_transaksi.nik')
            ->orWhere('log_transaksi.tanggal_keluar', '<', date('Y-m-d'))
            ->select('penyewa.nama', 'penyewa.nik')
            ->get();
        $list_not_penyewa = Penyewa::join('log_transaksi', 'penyewa.nik', '=', 'log_transaksi.nik')
            ->where('log_transaksi.tanggal_masuk', '<=', date('Y-m-d'))
            ->where('log_transaksi.tanggal_keluar', '>=', date('Y-m-d'))
            ->get();
        $activePenyewa = Penyewa::where('nik', $logToUpdate['nik'])->first();
        return view('pages.sewa.update_penyewaSewa', compact('logToUpdate', 'list_penyewa', 'list_not_penyewa', 'activePenyewa'));
    }
    public function updateSewa(Request $request, int $log_transaksi_id)
    {
        $status_pembayaran = 0;
        if ($request['status_pembayaran'] == 'on') {
            $status_pembayaran = 1;
        }
        $updatedData = [
            'kode_kamar' => $request['kode_kamar'],
            'tanggal_masuk' => $request['tanggal_masuk'],
            'tanggal_keluar' => $request['tanggal_keluar'],
            'status_pembayaran' => $status_pembayaran
        ];
        Log_Transaksi::where('id', $log_transaksi_id)->update($updatedData);
        return redirect('/detail?id=' . $log_transaksi_id);
    }
    public function deleteSewa(int $log_transaksi_id)
    {
        Log_Transaksi::where('id', $log_transaksi_id)->delete();
        return redirect('/');
    }
    public function sendKamarToSewa(Request $request, string $kode_kamar)
    {
        $list_penyewa = Penyewa::leftJoin('log_transaksi', 'penyewa.nik', '=', 'log_transaksi.nik')
            ->whereNull('log_transaksi.nik')
            ->orWhere('log_transaksi.tanggal_keluar', '<', date('Y-m-d'))
            ->select('penyewa.nama', 'penyewa.nik')
            ->get();
        $list_not_penyewa = Penyewa::join('log_transaksi', 'penyewa.nik', '=', 'log_transaksi.nik')
            ->where('log_transaksi.tanggal_masuk', '<=', date('Y-m-d'))
            ->where('log_transaksi.tanggal_keluar', '>=', date('Y-m-d'))
            ->get();
        return view('pages.sewa.penyewaSewa', compact("kode_kamar", "list_penyewa", 'list_not_penyewa'));
    }
    public function addKamarToPenyewa(Request $request)
    {
        $status_pembayaran = 0;
        $tanggal_masuk = $request['tanggal_masuk'];
        $tanggal_keluar = $request['tanggal_keluar'];
        if ($request['status_pembayaran'] == 'on') {
            $status_pembayaran = 1;
        }
        $kode_kamar = Kamar::where('kode_kamar', $request['kode_kamar'])->first()->kode_kamar;
        if ($tanggal_keluar < $tanggal_masuk) {
            $list_penyewa = Penyewa::leftJoin('log_transaksi', 'penyewa.nik', '=', 'log_transaksi.nik')
                ->whereNull('log_transaksi.nik')
                ->orWhere('log_transaksi.tanggal_keluar', '<', date('Y-m-d'))
                ->select('penyewa.nama', 'penyewa.nik')
                ->get();

            $list_not_penyewa = Penyewa::join('log_transaksi', 'penyewa.nik', '=', 'log_transaksi.nik')
                ->where('log_transaksi.tanggal_masuk', '<=', date('Y-m-d'))
                ->where('log_transaksi.tanggal_keluar', '>=', date('Y-m-d'))
                ->get();
            return view('sewa/penyewaSewa', compact('list_penyewa', 'kode_kamar', 'list_not_penyewa'))
                ->withErrors(["Tanggal Keluar Tidak Boleh Sebelum Tanggal Masuk"]);
        }
        $nik = Penyewa::where('nik', $request['nik'])->first()->nik;
        Log_Transaksi::create([
            'kode_kamar' => $kode_kamar,
            'nik' => $nik,
            'tanggal_masuk' => $tanggal_masuk,
            'tanggal_keluar' => $tanggal_keluar,
            'status_pembayaran' => $status_pembayaran,
        ]);
        return redirect('/');
    }
}