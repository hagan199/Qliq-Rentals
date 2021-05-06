<?php namespace App\Controllers;

class Auth extends BaseController
{

	public function index()
	{
		return view('layout/site');
	}

   
    
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
	//--------------------------------------------------------------------
}
