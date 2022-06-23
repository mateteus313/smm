<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Departaments extends BaseController
{
    public $departament;

    // Função para construir uma conexão com o banco de dados
    public function __construct()
    {
        // Pega o modelo
        $this->departament  = new \App\Models\DepartamentsModel();
    }

    public function index()
    {
        $dado['departaments'] = $this->departament->findAll();

        return view('departamentsfolder/departaments', $dado);
    }

    // ===== CRIAR NOVO DEPARTAMENTO =====
    public function criarDepartamento($id = -1)
    {
        return view('departamentsfolder/novo_departament');
    }

    // ===== SUBMIT DO NOVO DEPARTAMENTO =====
    public function criarDepartamentoSubmition($id = -1)
    {
        if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
            return redirect()->to(site_url('departaments'));
        }

        // Guardar no banco de dados
        $parametros = [
            'description' => $this->request->getPost('nome_departamento')
        ];
        $database = db_connect();
        $database->query("
            INSERT INTO departaments(description, created_at, updated_at)
            VALUES(:description:, NOW(), NOW())
            ", $parametros);

        $database->close();

        // Redirecionamento para a pagina inicial
        return redirect()->to(site_url('departaments'));
    }

    // ===== EDITAR DEPARTAMENTO =====
    public function editarDepartamento($id = -1)
    {
        $parametros = [
            'id' => $id
        ];
        $bancodados = db_connect();
        $dados = $bancodados->query("
            SELECT * FROM departaments WHERE id = :id:
        ", $parametros)->getResultObject();
        $bancodados->close();

        $dado['description'] = $dados[0];
        return view('departamentsfolder/editar_departament', $dado);
    }

    // ===== AO DAR O 'SUBMIT', A EDIÇÃO É FEITA NO BANCO DE DADOS =====
    public function editarDepartamentoSubmition()
    {
        $parametros = [
            'id' => $this->request->getPost('id'),
            'description' => $this->request->getPost('nome_departamento')
        ];
        $bancodados = db_connect();
        $bancodados->query("
            UPDATE departaments
            SET description = :description:,
            updated_at = NOW()
            WHERE id = :id:
        ", $parametros);
        $bancodados->close();

        // Atualizar a pagina inicial
        return redirect()->to(site_url('departaments'));
    }

    // ===== DELETAR DEPARTAMENTO =====
    public function deletarDepartamento($id = -1)
    {
        $computerModel = new \App\Models\Computers();

        $dado['departament'] = $this->departament->find($id);
        $dado['isLink'] = $computerModel->where('departament_id',$id)->find();
       
        if (!$dado) {
            return redirect()->to(site_url('departaments'));
        }

        return view('departamentsfolder/deletar_departament', $dado);
    }

    // ===== EXCLUSÃO CONFIRMADA =====
    public function deletarTarefaConfirmar($id = -1)
    {
        $this->departament->delete($id);

        // Atualizar pagina inicial
        return redirect()->to(site_url('departaments'));
    }
}
