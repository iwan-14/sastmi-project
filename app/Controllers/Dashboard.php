<?php

namespace App\Controllers;

use App\Models\SantriModel;
use App\Models\KehadiranModel;
use App\Models\NilaiModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in') || session()->get('role') !== 'admin') {
            return redirect()->to('/auth');
        }

        $santriModel     = new SantriModel();
        $kehadiranModel  = new KehadiranModel();
        $nilaiModel      = new NilaiModel();

        $data = [
            'jumlah_santri'     => $santriModel->countAll(),
            'jumlah_kehadiran'  => $kehadiranModel->countAll(),
            'rata_rata_nilai'   => $nilaiModel->selectAvg('nilai')->first()['nilai'],
            'status_kehadiran'  => [
                'Hadir' => $kehadiranModel->where('status', 'Hadir')->countAllResults(),
                'Izin'  => $kehadiranModel->where('status', 'Izin')->countAllResults(),
                'Sakit' => $kehadiranModel->where('status', 'Sakit')->countAllResults(),
                'Alpa'  => $kehadiranModel->where('status', 'Alpa')->countAllResults(),
            ]
        ];
        

        return view('dashboard', $data);
    }
}
