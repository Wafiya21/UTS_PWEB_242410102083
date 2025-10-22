<?php
// Controller Wafiya Ramadhaning Tyas - UTS Pemrograman Web

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // halaman login
    public function login()
    {
        return view('login');
    }

    // Proses login
    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password'); 

        return redirect()->route('beranda', ['username' => $username]);
    }

    // Halaman beranda setelah login
    public function beranda(Request $request)
    {
        $username = $request->query('username');
        return view('beranda', compact('username'));
    }

    // Halaman profil pengguna
    public function profileUser(Request $request)
    {
        $username = $request->query('username');

        if (strtolower($username) === 'wafiya') {
            $email = 'wafiya@mail.com';
        } else {
            $email = 'contoh@mail.com';
        }

        $status = 'Aktif';

        return view('profile', compact('username', 'email', 'status'));
    }

    // Halaman kelola produk 
    public function kelolaProduk()
    {
        $dataProduk = [
            ['nama_produk' => 'Sabun Wajah', 'jenis' => 'Perawatan Kulit', 'stok' => 12],
            ['nama_produk' => 'Toner Wajah', 'jenis' => 'Skincare', 'stok' => 10],
            ['nama_produk' => 'Serum Vitamin C', 'jenis' => 'Perawatan', 'stok' => 25],
        ];

        // Mengirim data array produk ke tampilan
        return view('kelola-produk', ['dataBarang' => $dataProduk]);
    }
}
