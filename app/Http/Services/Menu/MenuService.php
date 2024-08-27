<?php

namespace App\Http\Services\Menu;
//hello
use App\Models\Menu;

class MenuService{
    public function create($request){
        return Menu::create($request->0);
    }
}