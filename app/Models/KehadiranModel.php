<?php

namespace App\Models;

use CodeIgniter\Model;

class KehadiranModel extends Model
{
    protected $table = 'kehadiran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['santri_id', 'tanggal', 'status'];
}
