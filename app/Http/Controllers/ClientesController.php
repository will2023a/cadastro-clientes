<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes',
            'telefone' => 'required|string|max:20',
        ]);

        // Criação do cliente
        Clientes::create($request->all());

        return redirect('/clientes')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function edit(Clientes $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Clientes $cliente)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes,email,'.$cliente->id,
            'telefone' => 'required|string|max:20',
        ]);

        $cliente->update($request->all());

        return redirect('/clientes')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Clientes $cliente)
    {
        $cliente->delete();

        return redirect('/clientes')->with('success', 'Cliente excluído com sucesso!');
    }
}