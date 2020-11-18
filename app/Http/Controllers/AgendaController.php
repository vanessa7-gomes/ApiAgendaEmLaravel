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
        print_r($request->all());
        return Agenda::create($request->all());
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
        $carro = Agenda::findOrFail($id);
       return $agenda->update($request->all());
    }

    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
       return $agenda->delete();
    }
}
