<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function create() {
        return view('livros.create');
    }

    public function store(Request $request){
        Livro::create([
            'isbn' =>$request->isbn,
            'nome' =>$request->nome,
            'autor' =>$request->autor,
            'preco' =>$request->preco,
        ]);
        return "Livro salvo com sucesso";
    }

    public function show(){
        $livros = Livro::all();
        return view('livros.todos',['livros'=> $livros]);
    }

    public function destroy($id) {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return "Livro excluido com sucesso";
    }

    public function edit($id) {
        $livro = Livro::findOrFail($id);
        return view('livros.editar', ['livro'=> $livro]);
    }

    public function update($id, Request $request){
        $livro = Livro::findOrFail($id);
        $livro->update([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco,
        ]);
        return "Livro atualizado com sucesso";
    }
}
