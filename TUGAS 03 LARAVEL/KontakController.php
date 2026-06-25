<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        // Data kontak yang akan dikirim ke view
        $data = [
            'email'    => 'admin@contoh.com', // Ganti dengan email yang sesuai
            'nomor_hp' => '081234567890'      // Ganti dengan nomor yang sesuai
        ];

        // Memanggil view 'kontak.blade.php' dan membawa data
        return view('kontak', $data);
    }
}