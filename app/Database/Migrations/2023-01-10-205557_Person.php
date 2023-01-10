<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Person extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true,
                'constraint' => 20
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'company' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('people');
    }

    public function down()
    {
        $this->forge->dropTable('people');
    }
}
