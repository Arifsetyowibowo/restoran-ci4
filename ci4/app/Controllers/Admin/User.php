<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{

    protected $session = null;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

	public function index()
	{
		return view('welcome_message');
    }
    
    public function create()
    {
        

        $tbluser = [
            'user'  => 'koki',
            'email'=> 'koki@gmail.com',
            'level' => 'koki'
    ];
    
    $this->session->set($tbluser);

    }

    public function read()
    {
      
        echo $this->session->get('user');
        echo $this->session->get('email');
        echo $this->session->get('level');
        
    }

    public function delete()
    {
        
        $this->session->remove('user');
    }

    public function destroy()
    {
        $this->session->destroy();
    }
    

	//--------------------------------------------------------------------

}
