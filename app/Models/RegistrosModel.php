<?php 

namespace App\Models;

use CodeIgniter\Model;

class RegistrosModel extends Model
{
    protected $table      = 'registros';
    protected $primaryKey = 'id_registros';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_registros','cedula', 'comuna', 'activo', 'fecha'];

    protected $useTimestamps = false;

    

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

?>