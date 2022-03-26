<?php namespace App\Models;

use CodeIgniter\Model;


class usuarios extends Model {

    public function obtenerUsuario($data){

        $Usuario = $this->db->table('t_user');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();

    }
}