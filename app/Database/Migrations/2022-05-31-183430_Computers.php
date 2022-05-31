<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Computers extends Migration
{
    //--------------------------------------------------------------------
	public function up()
	{
		$this->forge->addField([

			'id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'departament_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
            'codigo' => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],	
            'username' => [
				'type'           => 'VARCHAR',
				'constraint'     => '60',
			],
            'video' => [
				'type'           => 'VARCHAR',
				'constraint'     => '60',
			],
            'hd' => [
				'type'           => 'VARCHAR',
				'constraint'     => '60',
			],
            'memory' => [
				'type'           => 'VARCHAR',
				'constraint'     => '60',
			],
            'processor' => [
				'type'           => 'VARCHAR',
				'constraint'     => '60',
			],
		]);

		$this->forge->addField("`created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->forge->addField("`updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->forge->addField("`deleted_at` datetime");
		
		$this->forge->addkey('id', TRUE);
		$this->forge->createTable('computers');
	}

	//--------------------------------------------------------------------
	public function down()
	{
		$this->forge->dropTable('computers');
	}
}
