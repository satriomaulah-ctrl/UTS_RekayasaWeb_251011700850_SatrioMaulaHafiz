<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'status' => 'Aktif',
            'nama' => 'Satrio Maula Hafiz',
            'nim' => '251011700850',
            'prodi' => 'Sistem Informasi',
            'email' => 'satriohafiz0307@gmail.com',
            'kampus' => 'Universitas Pamulang',
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}
