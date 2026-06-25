<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Data produk yang akan dikirim ke view
        $data = [
            'nama_produk' => 'Laptop ASUS ROG Strix', // Ganti sesuai kebutuhan
            'harga'       => 'Rp 25.000.000'          // Ganti sesuai kebutuhan
        ];

        // Memanggil view 'produk.blade.php' dan mengirimkan data
        return view('produk', $data);
    }
}