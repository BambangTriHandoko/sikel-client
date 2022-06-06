<?php

namespace App\Models;

use CodeIgniter\Model;

class SawahModel extends Model
{
    //tabel yang akan dipilih sebagai model
    protected $table = 'sawah';
    // protected $returnType    = 'object';
    protected $useTimestamps = true;
    //form yang boleh diisi
    protected $allowedFields = [
        'nama',
        'warna',
    ];

    //function mendapatkan id
    public function getid($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}