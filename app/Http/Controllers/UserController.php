<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard'); // Ganti dengan nama view yang sesuai
    }

    // Tambahkan metode lain sesuai kebutuhan
}