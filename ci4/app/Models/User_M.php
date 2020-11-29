<?php 

namespace App\Models;
use CodeIgniter\Model;

class User_M extends Model
{
    protected $table = 'tbluser';
    protected $primaryKey = 'iduser';
    protected $allowedFields = ['user', 'email','password','level','aktif'];
  
    protected $validationRules    = [
        'user' => 'alpha_numeric_space|min_length[3]|is_unique[tbluser.user]',
        'email' => 'valid_email|is_unique[tbluser.user]'
    ];
    protected $validationMessages = [
        'user'        => [
            'is_unique' => 'user sudah digunakan mohon buat user yang lain.',
            'alpha_numeric_space' => 'tidak boleh menggunakan symbol.',
            'min_length' => 'minimal Pengisian 3 huruf.'
        ],
        'email'        => [
            'valid_email' => 'Email Salah',
            'is_unique' => 'Email sudah digunakan mohon buat user yang lain.'
        
        ],

    ];
    

}





?>