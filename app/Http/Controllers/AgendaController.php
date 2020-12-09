<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
       return Agenda::all();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {   
        // print_r($request->all());
        // return Agenda::create($request->all());
        Agenda::create($request->all());
        return redirect()->route('listaContato');
    }

    public function show($id)
    {
        return Agenda::findOrFail($id);
    }

    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
        $agenda = Agenda::findOrFail($id);
       return $agenda->update($request->all());
    }
    
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        return redirect()->route('listaContato');
     }

    // carrega as rotas referente as view html
      // criado essa funcao    
      public function agendaCadastrar(){
        //echo 'formulario cadastrar';
        return view('contatos');
    }

    public function PaginaHome(){
        //echo 'chamar a pagina home';
        return view('index');
    }

    public function PaginaLista(){
        //echo 'chamar a pagina listar';
        $listaTodosUsuario = Agenda::all();//essa funcao é mesma index traz tudo contato
        return view('listar', compact('listaTodosUsuario'));
    } 
}