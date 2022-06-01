<?php

namespace App\Controllers;

use App\Models\CarrosModel;

class Home extends BaseController
{



public function registrar(){
        $model = new CarrosModel();

        $model->save([
            'id' => $this->request->getVar('id'),
            'modelo' => $this->request->getVar('modelo'),
            'marca' => $this->request->getVar('marca'),
            'placa' => $this->request->getVar('placa')
        ]);

        return redirect('listaCarros');

    }

}