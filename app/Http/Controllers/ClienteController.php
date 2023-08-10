<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Clientes;

class ClienteController extends Controller
{
    
    public function create()
    {
        return view('cliente.registrar');
    }

    /**
     * Display the list view.
     */
    public function list()
    {
        $clientes = Clientes::get();
        return view('cliente.listar', [
            'clientes' => $clientes,
        ]);
    }

    public function store(Request $request)
    {
        Clientes::create($request->all());

        return redirect()->route('cliente.listar')->with('msg', 'Cliente Cadastrado!');
    }

    public function edit(Clientes $clientes)
    {
        return view('cliente.editar', [
            'clientes' => $clientes,
        ]);
    }

    public function update(Request $request, Clientes $clientes)
    {
        $clientes->update($request->all());

        return redirect()->route('cliente.listar')->with('msg', 'Cliente Atualizado!');
    }

    public function destroy(Clientes $clientes)
    {
        $clientes->delete();

        return redirect()->route('cliente.listar')->with('msg', 'Cliente Deletado!');
    }
}
