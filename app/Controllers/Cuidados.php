<?php 

namespace App\Controllers;

use App\Controllers\BaseController;


class Cuidados extends BaseController
{
    public function index()
	{
		echo view('cuidados/includes/header');
		echo view('cuidados/index');
		echo view('cuidados/includes/footer');
	}
	
}

?>