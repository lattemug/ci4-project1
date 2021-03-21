<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_Mahasiswa'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nim'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'prodi' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_Mahasiswa');
		$this->forge->createTable('Mahasiswa');
	}

	public function down()
	{
		$this->forge->dropTable('Mahasiswa');
	}
}
