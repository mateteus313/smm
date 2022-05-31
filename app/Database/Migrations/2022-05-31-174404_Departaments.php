<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departaments extends Migration
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
			'description' => [
				'type'           => 'VARCHAR',
				'constraint'     => '60',
			],	
		]);

		$this->forge->addField("`created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->forge->addField("`updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->forge->addField("`deleted_at` datetime");
		
		$this->forge->addkey('id', TRUE);
		$this->forge->createTable('departaments');
	}

	//--------------------------------------------------------------------
	public function down()
	{
		$this->forge->dropTable('departaments');
	}
}
