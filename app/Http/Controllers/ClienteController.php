<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**$request->validate([
            'nome' => 'required|min:5|max:10',
            'email' => 'required|email|unique:clientes'
        ],$mensagens);*/

        $regras = [
            'email' => 'required|email|unique:clientes',
            'nome' => 'required',
            'idade' => 'required',
            'endereco' => 'required'
        ];

        $mensagens = [
            //'nome.required' => 'O nome é requerido',
            'required' => 'O atributo :attribute é requerido',
            'email.unique' => 'Este email já existe na nossa base de dados',
            'idade.min' => 'A idade mínima de 18 anos'
        ];

        $request->validate($regras, $mensagens);

        $cliente = new Cliente();
        $cliente->nome      = $request->input('nome');
        $cliente->idade     = $request->input('idade');
        $cliente->endereco  = $request->input('endereco');
        $cliente->email     = $request->input('email');
        $cliente->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
