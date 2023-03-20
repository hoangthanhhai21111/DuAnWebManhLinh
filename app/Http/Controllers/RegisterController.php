<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(){
        $registers = Register::orderBy('id', 'DESC')->paginate(10);
        return view('backend.register.index', compact('registers'));
    }
}
