<?php

namespace App\Controllers;

use App\Models\SantriModel;

class Santri extends BaseController
{
    protected $santriModel;

    public function __construct()
    {
        $this->santriModel = new SantriModel();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');

        if ($keyword) {
            $data['santri'] = $this->santriModel
                ->like('nama', $keyword)
                ->orLike('nis', $keyword)
                ->orLike('kelas', $keyword)
                ->findAll();
        } else {
            $data['santri'] = $this->santriModel->findAll();
        }

        $data['keyword'] = $keyword;
        return view('santri/index', $data);
    }

    public function tambah()
    {
        return view('santri/tambah');
    }

    public function simpan()
    {
        $this->santriModel->save([
            'nama'   => $this->request->getPost('nama'),
            'nis'    => $this->request->getPost('nis'),
            'kelas'  => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('/santri');
    }

    public function edit($id)
    {
        $data['santri'] = $this->santriModel->find($id);
        return view('santri/edit', $data);
    }

    public function update($id)
    {
        $this->santriModel->update($id, [
            'nama'   => $this->request->getPost('nama'),
            'nis'    => $this->request->getPost('nis'),
            'kelas'  => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('/santri');
    }

    public function hapus($id)
    {
        $this->santriModel->delete($id);
        return redirect()->to('/santri');
    }
}
