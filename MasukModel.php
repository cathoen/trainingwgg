<?php

namespace App\Models;

use CodeIgniter\Model;

class MasukModel extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'username';
    protected $returnType       = 'object';
    protected $allowedFields    = ['Username','Password'];

    public function tampilan_data() {
        return $this
        ->db
        ->table($this->table)
        ->get()
        ->getResult();
    }

    public function tambah_data($data)
    {
        return $this->insert($data);
    }

}
