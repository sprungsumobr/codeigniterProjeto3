<?php

namespace App\Controllers;

use App\Models\CarrosModel;

class Home extends BaseController
{
    
    public function index()
    {
        echo view('home');
        echo view('template/footer');
    }

    public function cadastroCarros()
    {
        echo view('cadastroCarros');
        echo view('template/footer');
    }

    public function listaCarros()
    {
        $model = new CarrosModel();

        $data = [
            'carros'=>$model->getCarros()
        ];
        echo view('listaCarros',$data);
        echo view('template/footer');
    }

    public function page($page='home'){
        
        echo view($page);
        echo view('template/footer');
    }

    public function carros(){
        $model = new CarrosModel();

        $data = [
            'title'=>'Carros',
            'carros'=>$model->getCarros()
        ];

        echo view('listaCarros',$data);
        echo view('template/footer');
    }

    public function cadastrar(){
        echo view('cadastroCarros');
        echo view('template/footer');
    }

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

    public function excluir($id = null){
        $model = new CarrosModel();
        $model->delete($id);
        return redirect("listaCarros");
        
    }

    public function editar($id = null){
        $model = new CarrosModel();
    
        $data = [
            'listaCarros' => $model->getCarro($id)
        ];
    
            echo view('cadastroCarros',$data);
            echo view('template/footer');
    }

}
