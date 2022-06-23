<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Computers extends BaseController
{
    public $computer;

    // Função para construir uma conexão com o banco de dados
    public function __construct()
    {
        // Pega o modelo
        $this->computer = new \App\Models\Computers();
    }

    public function index()
    {

        $db         = \Config\Database::connect();
        $builder   = $db->table('computers c');
        $builder->select('c.*,d.description');
        $builder->join('departaments d', 'd.id = c.departament_id');
        $builder->where(['c.deleted_at' => null]);
        $query = $builder->get();

        $dado['computers'] = $query->getResultArray();

        return view('computersfolder/computers', $dado);
    }

    // ===== CRIAR NOVO COMPUTADOR =====
    public function criarComputador($id = -1)
    {
        $departamentModel = new \App\Models\DepartamentsModel();

        $data['departaments'] = $departamentModel->findAll();

        return view('computersfolder/novo_computer',$data);
    }

    // ===== SUBMIT DO NOVO COMPUTADOR =====
    public function criarComputadorSubmition($id = -1)
    {
        if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
            return redirect()->to(site_url('computers'));
        }

        // Guardar no banco de dados
        $parametros = [
            'departament_id'    => $this->request->getPost('id_departamento'),
            'codigo'            => $this->request->getPost('codigo'),
            'username'          => $this->request->getPost('usuario'),
            'video'             => $this->request->getPost('video'),
            'hd'                => $this->request->getPost('hd'),
            'memory'            => $this->request->getPost('memoria'),
            'processor'         => $this->request->getPost('processador'),
        ];
        $database = db_connect();
        $database->query("
            INSERT INTO computers(departament_id, codigo, username, video, hd, memory, processor, created_at, updated_at)
            VALUES(:departament_id:, :codigo:, :username:, :video:, :hd:, :memory:, :processor:, NOW(), NOW())
            ", $parametros);

        $database->close();

        // Redirecionamento para a pagina inicial
        return redirect()->to(site_url('computers'));
    }

    // ===== EDITAR COMPUTADOR =====
    public function editarComputador($id = -1)
    {
        $departamentModel = new \App\Models\DepartamentsModel();

        $data['departaments'] = $departamentModel->findAll();
        $data['computer'] = $this->computer->find($id);

        //echo json_encode($computer);
        return view('computersfolder/editar_computer', $data);
    }

    // ===== AO DAR O 'SUBMIT', A EDIÇÃO É FEITA NO BANCO DE DADOS =====
    public function editarComputadorSubmition()
    {
        $parametros = [
            'id'                => $this->request->getPost('id'),
            'departament_id'    => $this->request->getPost('id_departamento'),
            'codigo'            => $this->request->getPost('codigo'),
            'username'          => $this->request->getPost('usuario'),
            'video'             => $this->request->getPost('video'),
            'hd'                => $this->request->getPost('hd'),
            'memory'            => $this->request->getPost('memoria'),
            'processor'         => $this->request->getPost('processador')
        ];

        $bancodados = db_connect();
        $bancodados->query("
            UPDATE computers
            SET departament_id  = :departament_id:,
            codigo              = :codigo:,
            username            = :username:,
            video               = :video:,
            hd                  = :hd:,
            memory              = :memory:,
            processor           = :processor:,
            
            updated_at          = NOW()
            WHERE id            = :id:
        ", $parametros);
        $bancodados->close();

        // Atualizar a pagina inicial
        return redirect()->to(site_url('computers'));
    }

    // ===== DELETAR COMPUTADOR =====
    public function deletarComputador($id = -1)
    {
        $departamentModel = new \App\Models\DepartamentsModel();

        $data['departaments'] = $departamentModel->find($id);

        if (!$data) {
            return redirect()->to(site_url('computers'));
        }
        return view('computersfolder/deletar_computer', $data);
    }

    // ===== EXCLUSÃO CONFIRMADA =====
    public function deletarComputadorConfirmar($id = -1)
    {
        $this->computer->delete($id);

        // Atualizar pagina inicial
        return redirect()->to(site_url('computers'));
    }

}
