<?php

namespace App\Models;

use CodeIgniter\Model;

class KelulusanModel extends Model
{
    protected $table      = 'kelulusan';
    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    protected $allowedFields = ['id_peserta', 'kelulusan'];
}
