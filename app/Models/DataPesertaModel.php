<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPesertaModel extends Model
{
    protected $table      = 'data_peserta';
    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    protected $allowedFields = ['id_peserta', 'nim', 'jurusan', 'jenis_kelamin'];
}
