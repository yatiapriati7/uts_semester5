<?php

namespace App\Models;

use CodeIgniter\Model;

class M_buku extends Model
{
    protected $table                = 'buku';
    protected $primaryKey           = 'id_buku';
    protected $allowedFields        = [
        'gambar_sampul', 'judul', 'pengarang', 'penerbit','id_kategori'
    ];
}

