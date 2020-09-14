<?php 

namespace App\Controllers;

use App\Controllers\BaseController;


class Noticias extends BaseController
{
    public function index()
    {
        echo view('noticias/index');
    }
}

?>