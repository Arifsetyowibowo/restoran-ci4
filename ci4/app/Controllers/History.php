<?php

namespace App\Controllers;


use App\Models\Menu_M;

class History extends BaseController
{
   
	public function index()
	{
        $idpel = session()->get('idpelanggan');

        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM vorderdetail WHERE idpelanggan=$idpel AND status=1 ORDER BY tglorder DESC");
        $orderdetail = $query->getResultArray();
        $cart = \Config\Services::cart();

        
        $data = [
            'judul' => "HISTORY PEMBELIAN",
            'orderdetail'  => $orderdetail,
            'cart' => $cart->contents(),
			'total' => $cart->total(),
        ];
        return view('front/history',$data);
    }
    

}
