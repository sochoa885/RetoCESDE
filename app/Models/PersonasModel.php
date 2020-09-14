<?php 

namespace App\Models;

use CodeIgniter\Model;

class PersonasModel extends Model
{
    protected $table      = 'personas';
    protected $primaryKey = 'cedula';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['cedula', 'nombre', 'telefono', 'direccion', 'descripcion'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

?>