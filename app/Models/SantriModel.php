<?php

namespace App\Models;

use CodeIgniter\Model;

class SantriModel extends Model
{
    protected $table = 'santri';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nis', 'kelas', 'alamat'];
}
