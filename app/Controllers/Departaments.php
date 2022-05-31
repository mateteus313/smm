<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Departaments extends BaseController
{
    public function index()
    {
        $dado['departaments'] = $this->pegarTodosDepartamentos();

        return view('departaments', $dado);
    }

    public function pegarTodosDepartamentos(){
        $bancodados = db_connect();
        $dados = $bancodados->query("SELECT * FROM departaments")->getResultObject();
        $bancodados->close();

        return $dados;
    }
}
