<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiPesertaModel extends Model
{
    protected $table      = 'nilai_peserta';
    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    protected $allowedFields = ['id_peserta', 'nilai1', 'nilai2', 'nilai3', 'nilai4'];
}
