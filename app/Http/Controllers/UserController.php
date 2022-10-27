<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registrationView()
    {
        return view('user.registration');
    }

    public function registrationPost(Request $request)
    {
        $request->validate([
            'success' => 'required',
            'name' => 'required',
            'login' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);
        $request->merge(['password' => Hash::make($request->password)]);
       Users::create($request->all());
        return redirect()->route('auth');
    }

    public function authorizationView()
    {
        return view('user.authorizaton');
    }

    public function authorizationPost(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only('login', 'password'))){
            $request->session()->regenerate();
            return redirect()->route('acc');
        }
        return back()->withErrors(['error' => 'Ошибка, попробуйсте еще раз']);
    }

    public function accountView()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('user.account', compact('orders'));
    }

    public function accountPost(Request $request)
    {

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth');
    }

    public function error()
    {
        return view('user/error');
    }

    public function mainView()
    {
        $orders = Order::where('status_id', 1)->get();
        return view('user.main', compact('orders'));
    }
}
