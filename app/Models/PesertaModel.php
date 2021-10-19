<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table      = 'peserta';
    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    protected $allowedFields = ['no_peserta', 'nama', 'tgl_lahir'];
}
