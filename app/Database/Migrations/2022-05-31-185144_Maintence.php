<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Maintence extends Migration
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
			'computer_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
            'description' => [
				'type'           => 'TEXT',
			],
            'resolved' => [
				'type'           => 'TEXT',
			],
		]);

		$this->forge->addField("`created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->forge->addField("`updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->forge->addField("`deleted_at` datetime");
		
		$this->forge->addkey('id', TRUE);
		$this->forge->createTable('maintence');
	}

	//--------------------------------------------------------------------
	public function down()
	{
		$this->forge->dropTable('maintence');
	}
}
