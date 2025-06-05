<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Password;
use App\Models\User;
use Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {

    }
}
