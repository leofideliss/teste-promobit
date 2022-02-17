<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    protected $table = 'users';

    public function showFormLogin()
    {
        return view('login');
    }

    public function index()
    {
        if (Auth::check() === true) {
           
            return redirect()->route('products.index');
        }


        return redirect()->route('login');
    }

    public function login(Request $request)
    {

        if (!strlen($request->login) > 0 || strlen($request->login) > 10)
            return redirect()->back()->withInput()->withErrors(['Login inválido']);

        $credentials = ['login' => $request->login, 'password' => $request->password];

        if (Auth::attempt($credentials)){
            return redirect()->route('products.index');
        }
            




        return redirect()->back()->withInput()->withErrors(['Dados inválidos']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('index');
    }
}
