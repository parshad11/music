<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class musiccontroller extends Controller
{
    //
    function login()

{
    return view('login');
}
    //
    function signup()

{
    return view('signup');
}
}
