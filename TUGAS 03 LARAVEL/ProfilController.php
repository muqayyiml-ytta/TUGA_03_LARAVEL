<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Data biodata yang akan dikirim ke view
        $data = [
            'nama' => 'Budi Santoso', // Ganti dengan nama yang diinginkan
            'kelas' => '12 RPL 1'     // Ganti dengan kelas yang diinginkan
        ];

        // Memanggil view 'profil.blade.php' dan membawa variabel $data
        return view('profil', $data);
    }
}