<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('layout/main');
	}

	public function site()
	{
		return view('layout/site/index');
	}
	//--------------------------------------------------------------------
}
