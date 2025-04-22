<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view("create");
    }

    public function update(){
        return view("update");
    }

    public function read(){
        return view("read");
    }
}
