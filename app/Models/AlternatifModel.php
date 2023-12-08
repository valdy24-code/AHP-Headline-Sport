<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table      = 'tb_alternatif';
    protected $primaryKey = 'id_alternatif';

    // protected $useAutoIncrement = true;
    // protected $allowedFields = ['asik'];
     protected $allowedFields = ['kode_alternatif','nama_alternatif'];
}