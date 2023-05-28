<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function loginView()
    {
        return view('login.index');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/home');
        }
        return back()->withErrors(["Please Check your Email or Password"]);
    }
    public function signupView()
    {
        return view('signup/index');
    }
    public function signup(SignupRequest $request)
    {
        try {
            $data = $request->validated();
            $user = User::create([
                'name' => $data["name"],
                'email' => $data["email"],
                'password' => Hash::make($data["password"]),
            ]);

            if (Auth::attempt($data)) {
                $request->session()->regenerate();
                return redirect('/home');
            }
        } catch (ValidationException $e) {
            $errorMessages = $e->validator->getMessageBag()->all();
            return redirect()->back()->withErrors($errorMessages)->withInput();
        }
    }
    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}