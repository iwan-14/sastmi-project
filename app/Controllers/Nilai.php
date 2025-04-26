<?php

namespace App\Controllers;

use App\Models\NilaiModel;
use App\Models\SantriModel;
use Dompdf\Dompdf;


class Nilai extends BaseController
{
    protected $nilaiModel;
    protected $santriModel;

    public function __construct()
    {
        $this->nilaiModel = new NilaiModel();
        $this->santriModel = new SantriModel();
    }

    public function index()
    {
        $data['nilai'] = $this->nilaiModel
            ->select('nilai.*, santri.nama, santri.nis')
            ->join('santri', 'santri.id = nilai.santri_id')
            ->orderBy('santri.nama', 'ASC')
            ->findAll();

        return view('nilai/index', $data);
    }

    public function tambah()
    {
        $data['santri'] = $this->santriModel->findAll();
        return view('nilai/tambah', $data);
    }

    public function simpan()
    {
        $this->nilaiModel->save([
            'santri_id'       => $this->request->getPost('santri_id'),
            'mata_pelajaran'  => $this->request->getPost('mata_pelajaran'),
            'nilai'           => $this->request->getPost('nilai'),
            'semester'        => $this->request->getPost('semester'),
        ]);

        return redirect()->to('/nilai');
    }

    public function exportPdf()
    {
        $data['nilai'] = $this->nilaiModel
            ->select('nilai.*, santri.nama, santri.nis')
            ->join('santri', 'santri.id = nilai.santri_id')
            ->orderBy('santri.nama', 'ASC')
            ->findAll();

        $html = view('nilai/pdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('data_nilai_santri.pdf', ['Attachment' => false]);
        exit;
    }
}
