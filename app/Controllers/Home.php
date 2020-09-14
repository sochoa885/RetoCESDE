<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('includes/header');
		echo view('index');
		echo view('includes/footer');
	}

	

}
