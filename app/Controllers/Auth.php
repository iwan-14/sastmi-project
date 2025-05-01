<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session = session();
        $model = new AdminModel();

        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password')); // masih pakai MD5 karena sesuai insert awal

        $admin = $model->where('username', $username)
                       ->where('password', $password)
                       ->first();

        if ($admin) {
            $session->set([
                'username' => $admin['username'],
                'role'     => $admin['role'],
                'logged_in' => true
            ]);
                    
            // Arahkan berdasarkan role
            if ($admin['role'] == 'admin') {
                return redirect()->to('/dashboard');
            } elseif ($admin['role'] == 'pengasuh') {
                return redirect()->to('/pengasuh');
            } elseif ($admin['role'] == 'orangtua') {
                return redirect()->to('/orangtua');
            }
        } else {
            // Set flash message untuk error
            $session->setFlashdata('error', 'Username atau Password salah!');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
}
