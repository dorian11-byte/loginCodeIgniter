<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migrations;

class TUsers extends Migration {

    public function up()
    {
        $this->forge->addField([
            'id_usuario'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pwd'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('t_user');
    }

    public function down()
    {
        $this->forge->dropTable('t_user');
    }
}