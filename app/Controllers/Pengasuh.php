<?php

namespace App\Controllers;

class Pengasuh extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in') || session()->get('role') !== 'pengasuh') {
            return redirect()->to('/auth');
        }

        return view('pengasuh/index');
    }
}
