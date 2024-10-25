<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Ganti dengan nama view yang sesuai
    }

    public function manageUsers()
    {
        // Logika untuk mengelola pengguna
        return view('admin.manage-users'); // Ganti dengan nama view yang sesuai
    }

    // Tambahkan metode lain sesuai kebutuhan
}