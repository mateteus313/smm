<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Maintence extends BaseController
{
    public $maintence;

    // Função para construir uma conexão com o banco de dados
    public function __construct()
    {
        // Pega o modelo
        $this->maintence = new \App\Models\Maintence();
    }

    public function index()
    {
        $computer = new \App\Models\Computers();

        $dado['computers'] = $computer->findAll();

        return view('maintencefolder/novo_maintence', $dado);
    }

    public function visualizarHistorico($id = -1)
    {
        $dado['maintences'] = $this->maintence->where('computer_id',$id)->find();

        return view('maintencefolder/maintences', $dado);
    }

    public function criarMaintenceSubmition($id = -1)
    {
        if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
            return redirect()->to(site_url('computers'));
        }

        // Guardar no banco de dados
        $parametros = [
            'computer_id'       => $this->request->getPost('id_computador'),
            'description'       => $this->request->getPost('descricao'),
            'resolved'          => $this->request->getPost('resolucao'),
        ];
        $database = db_connect();
        $database->query("
            INSERT INTO maintences(computer_id, description, resolved, created_at, updated_at)
            VALUES(:computer_id:, :description:, :resolved:, NOW(), NOW())
            ", $parametros);

        $database->close();

        // Redirecionamento para a pagina inicial
        return redirect()->to(site_url('computers'));
    }
}
