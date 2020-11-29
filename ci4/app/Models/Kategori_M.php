<?php 

namespace App\Models;
use CodeIgniter\Model;

class Kategori_M extends Model
{
    protected $table = 'tblkategori';
    protected $primaryKey = 'idkategori';
    protected $allowedFields = ['kategori', 'keterangan'];
    
    protected $validationRules    = [
        'kategori' => 'alpha_numeric_space|min_length[3]|is_unique[tblkategori.kategori]'
    ];
    protected $validationMessages = [
        'kategori'        => [
            'is_unique' => 'Kategori sudah digunakan mohon buat kategori yang lain.',
            'alpha_numeric_space' => 'Kategori tidak menggunakan symbol.',
            'min_length' => 'Pengisian kategori minimal  3 huruf.'
        ]
    ];
}


















?>