<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //Main
    public function index()
    {
        return view("admin.home",[
            "title" => "Trang quản trị Admin"
        ]);
    }


}