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
        return view('sewa/kamarSewa', compact('availableKamar', 'listKamar'));
    }

    public function sendKamarToSewa(Request $request)
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
        $kode_kamar = $request['kode_kamar'];
        return view('sewa/penyewaSewa', compact("kode_kamar", "list_penyewa", 'list_not_penyewa'));
    }
    public function addKamarToPenyewa(Request $request)
    {
        $tanggal_masuk = $request['tanggal_masuk'];
        $tanggal_keluar = $request['tanggal_keluar'];
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
        ]);
        return redirect('/');
    }
}