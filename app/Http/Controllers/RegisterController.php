<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(){
        $register = Register::all();
        return view('backend.register.index', compact('register'));
    }
}
