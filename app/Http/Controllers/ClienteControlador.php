<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteControlador extends Controller
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
        $regras = [
            'nome' => 'required|min:3|max:20|unique:clientes', //vem do <input name='nome'
            'idade' => 'required',
            'endereco' => 'required|min:5',
            'email' => 'required|email'
        ];
        $mensagens = [
          'required' => 'Campo :attribute obrigatorio!',
          'nome.required' => 'O nome é requerido!',
          'nome.min' => 'Tem de ter no minimo 3 caracteres!',
          'email.required' => 'O email é requerido!',
          'email.email' => 'Email invalido!'
        ];

        $request->validate($regras, $mensagens);  //metodo validate é proprio do Request

        // $request->validate([
        //     'nome' => 'required|min:3|max:20|unique:clientes', //o unique vai fzr com q ao tentar registar um novo cliente, ele vai comparar na tabela 'clientes' se ja ha a string q estamos a inserir. PE se estou a inserir 'Maria' ele vai comparar com o campo 'nome' se ja 'Maria' registado.
        //     'idade' => 'required',
        //     'endereco' => 'required|min:5',
        //     'email' => 'required|email'
        // ]);

        // $cliente = new Cliente();
        // $cliente->nome = $request->input('nome');
        // $cliente->idade = $request->input('idade');
        // $cliente->endereco = $request->input('endereco');
        // $cliente->email = $request->input('email');
        // $cliente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
