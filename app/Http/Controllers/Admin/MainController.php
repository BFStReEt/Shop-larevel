<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //Main controller
    //hello
    //Day3
    //Day5
    //Day6
    //Day7
    //Day8
    public function index()
    {
        return view("admin.home",[
            "title" => "Trang quản trị Admin"
        ]);
    }


}