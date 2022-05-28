<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrosModel extends Model{
    public $table = 'tb_carros';
    public $primaryKey = 'id';
    public $allowedFields = ['modelo', 'marca', 'placa'];

    public function getCarros(){
        return $this->findAll();
    }

    public function getCarro($id){
        return $this->asArray()->where(['id'=>$id])->first();

    }
}