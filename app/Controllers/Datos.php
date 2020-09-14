<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ComunasModel;
use App\Models\PersonasModel;
use App\Models\RegistrosModel;


class Datos extends BaseController
{

	protected $comunas;
    protected $personas;
    protected $registros;

    public function __construct()
    {
        $this->comunas = new ComunasModel();
        $this->personas = new PersonasModel();
        $this->registros = new RegistrosModel();
	}
	

    public function index()
	{
		$registros = $this->registros->findAll();
        $data = ['titulo' => 'Listado Completo', 'datos' => $registros];
		echo view('datos/includes/header');
		echo view('datos/index', $data);
		echo view('datos/includes/footer');
    }
    
    public function comuna1($comuna=1)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 1', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna1', $data);
        echo view('datos/includes/footer');
    }

    public function comuna2($comuna=2)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 2', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna2', $data);
        echo view('datos/includes/footer');
    }

    public function comuna3($comuna=3)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 3', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna3', $data);
        echo view('datos/includes/footer');
    }

    public function comuna4($comuna=4)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 4', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna4', $data);
        echo view('datos/includes/footer');
    }

    public function comuna5($comuna=5)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 5', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna5', $data);
        echo view('datos/includes/footer');
    }

    public function comuna6($comuna=6)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 6', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna6', $data);
        echo view('datos/includes/footer');
    }

    public function comuna7($comuna=7)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 7', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna7', $data);
        echo view('datos/includes/footer');
    }

    public function comuna8($comuna=8)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 8', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna8', $data);
        echo view('datos/includes/footer');
    }

    public function comuna9($comuna=9)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 9', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna9', $data);
        echo view('datos/includes/footer');
    }

    public function comuna10($comuna=10)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 10', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna10', $data);
        echo view('datos/includes/footer');
    }

    public function comuna11($comuna=11)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 11', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna11', $data);
        echo view('datos/includes/footer');
    }

    public function comuna12($comuna=12)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 12', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna12', $data);
        echo view('datos/includes/footer');
    }

    public function comuna13($comuna=13)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 13', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna13', $data);
        echo view('datos/includes/footer');
    }

    public function comuna14($comuna=14)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 14', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna14', $data);
        echo view('datos/includes/footer');
    }

    public function comuna15($comuna=15)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 15', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna15', $data);
        echo view('datos/includes/footer');
    }

    public function comuna16($comuna=16)
    {
        $registros = $this->registros->where('comuna',$comuna)->findAll();
        $data = ['titulo' => 'Comuna 16', 'datos' => $registros];
        echo view('datos/includes/header');
        echo view('datos/comunas/comuna16', $data);
        echo view('datos/includes/footer');
    }
	
}

?>