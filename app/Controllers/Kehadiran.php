<?php

namespace App\Controllers;

use App\Models\KehadiranModel;
use App\Models\SantriModel;
use Dompdf\Dompdf;
class Kehadiran extends BaseController
{
    protected $kehadiranModel;
    protected $santriModel;

    public function __construct()
    {
        $this->kehadiranModel = new KehadiranModel();
        $this->santriModel = new SantriModel();
    }

    public function index()
    {
        $data['kehadiran'] = $this->kehadiranModel
            ->select('kehadiran.*, santri.nama, santri.nis')
            ->join('santri', 'santri.id = kehadiran.santri_id')
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        return view('kehadiran/index', $data);
    }

    public function tambah()
    {
        $data['santri'] = $this->santriModel->findAll();
        return view('kehadiran/tambah', $data);
    }

    public function simpan()
    {
        $this->kehadiranModel->save([
            'santri_id' => $this->request->getPost('santri_id'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'status'    => $this->request->getPost('status'),
        ]);

        return redirect()->to('/kehadiran');
    }

    public function exportPdf()
    {
        $data['kehadiran'] = $this->kehadiranModel
            ->select('kehadiran.*, santri.nama, santri.nis')
            ->join('santri', 'santri.id = kehadiran.santri_id')
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        $html = view('kehadiran/pdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('data_kehadiran.pdf', ['Attachment' => false]);
        exit;
    }
}
