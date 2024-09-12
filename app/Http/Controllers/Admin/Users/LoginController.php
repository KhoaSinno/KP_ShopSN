<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Login',
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->input());
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            // role = 1 is admin check hear
        ], $request->input('remember'))) {

            return redirect()->route('admin');
        } else {
            Session::flash('error', 'Email or password incorrect');
        };

        return redirect()->back();
    }
}
