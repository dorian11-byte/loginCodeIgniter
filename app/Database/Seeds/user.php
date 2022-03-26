<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run(){

        $usuario = "admin@mail.com"
        $password = password("123", PASSWORD_DEFAULT);

        $data = [
            'usuario' => $usuario,
            'password'    => $password,
        ];

         // Using Query Builder
         $this->db->table('t_user')->insert($data);
    }
}