<?php 

namespace App\Models;

use CodeIgniter\Model;

class ComunasModel extends Model
{
    protected $table      = 'comunas';
    protected $primaryKey = 'comuna';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['comuna','nombre', 'estrato_promedio', 'numero_residentes'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

?>