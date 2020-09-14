<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ComunasModel;
use App\Models\PersonasModel;
use App\Models\RegistrosModel;
use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    protected $comunas;
    protected $personas;
    protected $registros;
    protected $usuarios;

    

    public function __construct()
    {
        $this->comunas = new ComunasModel();
        $this->personas = new PersonasModel();
        $this->registros = new RegistrosModel();
        $this->usuarios = new UsuariosModel();
        
    }

    public function index($activo = 1)
    {
        $session = \Config\Services::session();

        if($session->get('ingresado')==true)
        {
            $registros = $this->registros->findAll();
                $registros2 = $this->registros->where('activo', $activo)->findAll();
                $max = 0;
                $contador = 0;
                for ($i = 1; $i <= 10; $i++) {
                    $x = $this->registros->where('comuna', $i)->findAll();
                    if ($x > $max) {
                        $max = $x;
                        $contador = $i;
                    }
                }

                $data = ['titulo' => 'Listado Completo', 'datos' => $registros, 'datos2' => $registros2, 'comunaafectada' => $contador];
                echo view('admin/includes/header');
                echo view('admin/index', $data);
                echo view('admin/includes/footer');
        }
        else 
        {
            if (isset($_POST['username'])) {
                $usernamee = $_POST['username'];
                $passwordd = $_POST['password'];
    
                $user = $this->usuarios->where('usuario', $usernamee)->countAllResults();
                $pass = $this->usuarios->where('password', md5($passwordd))->countAllResults();
                if ($user != 0 and $pass != 0) {
    
                    $session->set('ingresado', true);
    
                    $registros = $this->registros->findAll();
                    $registros2 = $this->registros->where('activo', $activo)->findAll();
                    $max = 0;
                    $contador = 0;
                    for ($i = 1; $i <= 10; $i++) {
                        $x = $this->registros->where('comuna', $i)->findAll();
                        if ($x > $max) {
                            $max = $x;
                            $contador = $i;
                        }
                    }
    
                    $data = ['titulo' => 'Listado Completo', 'datos' => $registros, 'datos2' => $registros2, 'comunaafectada' => $contador];
                    echo view('admin/includes/header');
                    echo view('admin/index', $data);
                    echo view('admin/includes/footer');
                } else {
                    $data = ['error' => 'Usuario o Contraseña incorrectos'];
                    echo view('admin/login', $data);
                }
            } else {
                $data = ['error' => 'Usuario o Contraseña incorrectos'];
                echo view('admin/login', $data);
            }
        }
    }

    public function lista()
    {
        $registros = $this->registros->findAll();
        $data = ['titulo' => 'Listado Completo', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/lista', $data);
        echo view('admin/includes/footer');
    }

    public function graficas()
    {
        echo view('admin/includes/header');
        echo view('admin/graficas');
        echo view('admin/includes/footer');
    }

    public function login()
    {
        $session = \Config\Services::session();

        if($session->get('ingresado')==true)
        {
            return redirect()->to('index');
        }
        else
        {
            echo view('admin/login');
        }

        
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->set('ingresado', false);
        return redirect()->to(base_url());
    }


    public function agregar()
    {
        echo view('admin/includes/header');
        echo view('admin/tasks/agregar');
        echo view('admin/includes/footer');
    }

    public function editar($id)
    {
        $registro = $this->registros->where('id_registros', $id)->first();
        $data= ['datos' => $registro];
        echo view('admin/includes/header');
        echo view('admin/tasks/editar', $data);
        echo view('admin/includes/footer');
    }

    public function eliminar()
    {
        echo view('admin/includes/header');
        echo view('admin/tasks/eliminar');
        echo view('admin/includes/footer');
    }

    public function agregar_task()
    {
        if(isset($_POST['id']))
        {
            $id= $_POST['id'];
            $cedula= $_POST['cedula'];
            $nombre= $_POST['nombre'];
            $telefono= $_POST['telefono'];
            $direccion= $_POST['direccion'];
            $descripcion= $_POST['descripcion'];
            $comuna= $_POST['comuna'];
            $fecha= $_POST['fecha'];
            $activo = 1;

            $data1=[
                'cedula' => $cedula,
                'nombre' => $nombre,
                'telefono' => $telefono,
                'direccion' => $direccion,
                'descripcion' => $descripcion
            ];
            
            $data2=[
                'id_registros' => $id,
                'cedula' => $cedula,
                'comuna' => $comuna,
                'fecha' => $fecha,
                'activo' => $activo
            ];

            $this->personas->insert($data1);
            $this->registros->insert($data2);
            //echo ($cedula);
            return redirect()->to('index');
        }
    }

    public function editar_task()
    {
        if(isset($_POST['id']))
        {
            $id= $_POST['id'];
            $cedula= $_POST['cedula'];
            $comuna= $_POST['comuna'];
            $fecha= $_POST['fecha'];
            $activo = $_POST['activo'];

            
            
            

            $this->registros->where('id_registros',$id)->update([
                
                'comuna' => $comuna,
                'fecha' => $fecha,
                'activo' => $activo
            ]);
            //echo ($cedula);
            return redirect()->to('index');
        }
    }

    public function eliminar_task()
    {
        
    }

    public function comuna1($comuna = 1)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 1', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna1', $data);
        echo view('admin/includes/footer');
    }

    public function comuna2($comuna = 2)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 2', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna2', $data);
        echo view('admin/includes/footer');
    }

    public function comuna3($comuna = 3)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 3', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna3', $data);
        echo view('admin/includes/footer');
    }

    public function comuna4($comuna = 4)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 4', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna4', $data);
        echo view('admin/includes/footer');
    }

    public function comuna5($comuna = 5)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 5', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna5', $data);
        echo view('admin/includes/footer');
    }

    public function comuna6($comuna = 6)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 6', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna6', $data);
        echo view('admin/includes/footer');
    }

    public function comuna7($comuna = 7)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 7', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna7', $data);
        echo view('admin/includes/footer');
    }

    public function comuna8($comuna = 8)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 8', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna8', $data);
        echo view('admin/includes/footer');
    }

    public function comuna9($comuna = 9)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 9', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna9', $data);
        echo view('admin/includes/footer');
    }

    public function comuna10($comuna = 10)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 10', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna10', $data);
        echo view('admin/includes/footer');
    }

    public function comuna11($comuna = 11)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 11', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna11', $data);
        echo view('admin/includes/footer');
    }

    public function comuna12($comuna = 12)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 12', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna12', $data);
        echo view('admin/includes/footer');
    }

    public function comuna13($comuna = 13)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 13', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna13', $data);
        echo view('admin/includes/footer');
    }

    public function comuna14($comuna = 14)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 14', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna14', $data);
        echo view('admin/includes/footer');
    }

    public function comuna15($comuna = 15)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 15', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna15', $data);
        echo view('admin/includes/footer');
    }

    public function comuna16($comuna = 16)
    {
        $registros = $this->registros->where('comuna', $comuna)->findAll();
        $data = ['titulo' => 'Comuna 16', 'datos' => $registros];
        echo view('admin/includes/header');
        echo view('admin/comunas/comuna16', $data);
        echo view('admin/includes/footer');
    }
}
