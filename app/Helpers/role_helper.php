<?php

function only_admin()
{
    if (!session()->get('logged_in') || session()->get('role') !== 'admin') {
        return redirect()->to('/auth')->with('error', 'Akses ditolak.');
    }
}

function only_pengasuh()
{
    if (!session()->get('logged_in') || session()->get('role') !== 'pengasuh') {
        return redirect()->to('/auth')->with('error', 'Akses ditolak.');
    }
}
