<?php 

namespace App\Models;
use CodeIgniter\Model;

class Order_M extends Model
{
    protected $table = 'tblorder';
    protected $primaryKey = "idorder";
    protected $allowedFields = ['idpelanggan', 'tglorder','total','bayar','kembali','status'];

 
    public function getProduct($id)
    {
        return $this->db->table($this->table)->where('idorder', $id)->get()->getRowArray();
    }
    
}



?>