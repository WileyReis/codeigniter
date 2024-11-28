<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view('templates/header') .
               view('templates/nav').
               view('index').
               view('templates/footer');
    }

    public function administracao()
    {
        return view('templates/header') .
               view('templates/nav').
               view('administracao').
               view('templates/footer');
    }

    public function admins()
    {
        return view('templates/header') .
               view('templates/nav').
               view('admins').
               view('templates/footer');
    }

    public function alterar()
    {
        return view('templates/header') .
               view('templates/nav').
               view('alterar').
               view('templates/footer');
    }

    public function cadastro()
    {
        return view('templates/header') .
               view('templates/nav').
               view('cadastro').
               view('templates/footer');
    }

    public function cadlogin()
    {
        return view('templates/header') .
               view('templates/nav').
               view('cadlogin').
               view('templates/footer');
    }

    public function login()
    {
        return view('templates/header') .
               view('templates/nav').
               view('login').
               view('templates/footer');
    }

    public function pesquisar()
    {
        return view('templates/header') .
               view('templates/nav').
               view('pesquisa').
               view('templates/footer');
    }
}
