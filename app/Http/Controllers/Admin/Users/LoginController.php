<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        echo "hello";
        return view("admin.users.login", [
            'title' => 'Hello ban nho, lau roi minh chua gap',
        ]);
    }
}