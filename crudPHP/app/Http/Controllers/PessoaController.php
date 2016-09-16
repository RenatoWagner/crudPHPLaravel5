<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pessoa;

class PessoaController extends Controller
{
    public function index(){

      $pessoas = Pessoa::all();

      return view('pessoas.index')->with('pessoas', $pessoas);
    }

    public function create(){

      return view('pessoas.create');
    }

    public function store(Request $request){
      /*
      $pessoa = new Pessoa;
      $pessoa->nome = $request->nome;
      $pessoa->save();
      return "alguma coisa";
      */
      $inputs = $request->all();
      $pessoa = Pessoa::Create($inputs);

      return redirect()->action('PessoaController@index');
      //return redirect()->route('pessoa.index');
    }

    public function show($id){

      $pessoa = Pessoa::find($id);

      return view('pessoas.show')->with('pessoa', $pessoa);

    }

    public function destroy($id){

      $pessoa = Pessoa::find($id)
        ->delete();

      return redirect()->route('pessoa.index');
    }

    public function edit($id){

      $pessoa = Pessoa::find($id);

      //return $pessoa;

      return view('pessoas.edit', compact('pessoa', $pessoa));

    }

    public function update(Request $request, $id){

      $pessoa = Pessoa::find($id);
      $pessoa->nome = $request->nome;
      $pessoa->save();

      return redirect()->route('pessoa.index');
    }


}
