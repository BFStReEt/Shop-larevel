<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\CreateLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view("admin.users.login", [
            'title' => 'Login',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin/users/login');
    }

    public function store(CreateLoginRequest $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
                       
        ], $request->input('remember'))) {
            return redirect()->route('admin');
        }

        session()->flash('error', 'Email hoặc mật khẩu không đúng');
        return redirect()->back();
    }
    
}
