<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Models\Menu_M;


class Menu extends BaseController
{
	public function index()
	{
		$pager = \Config\Services::pager();
		$model = new Menu_M();


		$judul = 'DATA MENU';


		$data = [
			'judul' => $judul,
			'menu' => $model->paginate(5, 'page'),
			'pager' => $model->pager
		];

		echo view("menu/select", $data);
    }
    
    
    public function read()
    {
		$pager = \Config\Services::pager();
        if (isset($_GET['idkategori'])) {
            $id = $_GET['idkategori'];
			$model = new Menu_M();
			$jumlah = $model->where('idkategori',$id)->findAll();
			$count = count($jumlah);
			
			$tampil = 4;
			$mulai = 0;
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
				$mulai = ($tampil * $page) - $tampil;
			}

			

			$menu = $model->where('idkategori',$id)->findAll($tampil,$mulai);

			$judul = 'DATA PENCARIAN MENU';
			$data = [
				'judul' => $judul,
				'menu' => $menu,
				'pager' => $pager,
				'tampil' => $tampil,
				'total' => $count
			];
	
			return view("menu/cari", $data);
        }
	}
	public function create()
	{
		$model = new Kategori_M();
		$kategori = $model->findAll();

		$data = [
			'kategori' => $kategori
		];
		echo view("menu/insert",$data);
	}
	public function insert()
	{
		$request = \Config\Services::request();
		$file = $request->getFile('gambar');
		$name = $file->getName();
		$model = new Kategori_M();

		$data = [
			
		];


		// if ($model->insert($_POST) === false) {
		// 	$error = $model->errors();
		// 	//echo $error['kategori'];
		// 	session()->setFlashdata('info', '<div class="alert alert-danger" type="hidden" >' . $error['kategori'] . '</div>');
		// 	return redirect()->to(base_url('/admin/kategori/create'));
		// } else {
		// 	return redirect()->to(base_url('/admin/kategori'));
		// }
	}
	public function option()
	{
		$model = new Kategori_M();
		$kategori = $model->findAll();

		$data = [
			'kategori' => $kategori
		];
		return view('template/option',$data);
    }
	
	public function delete($id = null)
	{
		$model = new Menu_M();
		$model->delete($id);
		return redirect()->to(base_url('/admin/menu'));
	}

	

}
