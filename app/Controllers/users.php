<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class users extends BaseController
{
    public function index()
    {
        $user = new User();
        $datos['user'] = $user->orderBy('id_usuario','ASC')->findAll();

        return view('users',$datos);
    }
}