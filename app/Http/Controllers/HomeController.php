<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function teste()
    {
        //return view('contatos');
        echo 'teste';
    }

    public function cadastrarPessoa()
    {
        // chamar a controller Agenda e a funcao store
        // tipo a rota dela
        //return view('index');
        echo 'cadastrar Pessoa';
    }
}