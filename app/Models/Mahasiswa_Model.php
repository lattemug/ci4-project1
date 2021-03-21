<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_Model extends Model
{

    protected $table = 'Mahasiswa';
    protected $primaryKey = 'id_Mahasiswa';
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['nim', 'nama', 'prodi', 'email', 'alamat'];
}
