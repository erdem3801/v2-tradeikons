<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'default' => 'seller', 
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
                'unique' => true
            ],
          
            'created_at DATETIME default current_timestamp ',
			'updated_at DATETIME default current_timestamp on update current_timestamp',
			'deleted_at DATETIME default null',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('user');
        //
    }

    public function down()
    {
        $this->forge->dropTable('user');
        //
    }
}
