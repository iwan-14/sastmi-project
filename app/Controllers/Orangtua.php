<?php

namespace App\Controllers;

use App\Models\SantriModel;
use App\Models\NilaiModel;

class Orangtua extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in') || session()->get('role') !== 'orangtua') {
            return redirect()->to('/auth');
        }

        $santriModel = new SantriModel();
        $nilaiModel  = new NilaiModel();

        // Cari santri berdasarkan username wali
        $santri = $santriModel->where('wali_username', session('username'))->first();

        if (!$santri) {
            return view('orangtua/no_santri');
        }

        $data['santri'] = $santri;

        // Ambil nilai khusus anak ini
        $data['nilai'] = $nilaiModel
            ->where('santri_id', $santri['id'])
            ->findAll();

        return view('orangtua/index', $data);
    }

}
