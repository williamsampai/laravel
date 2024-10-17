<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;


class FuncionarioController extends Controller
{

    public readonly Funcionario $funcionario;

    public function __construct()
    {
        $this->funcionario = new Funcionario();
    }

    public function index()
    {
        $funcionario = Funcionario::all();
        return view('funcionarios',['funcionarios'=> $funcionario]);
    }

    public function create()
    {
        return view('funcionario_create');
    }

    public function store(Request $request)
    {
        $created = $this->funcionario->create([
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade')

        ]);
        if($created) {
            return redirect()->back()->with('message', 'Criado com sucesso!');
        }
        return redirect()->back()->with('message', 'Error ao criar!');

    }

    public function show(Funcionario $funcionario)
    {
        return view('funcionario_show',['funcionario' => $funcionario]);
    }

    public function edit(Funcionario $funcionario)
    {
       return view('funcionario_edit', ['funcionario' => $funcionario]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->funcionario->where('id', $id)->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->back()->with('message', 'Atualizado com sucesso!');
        }
        return redirect()->back()->with('message', 'Error ao atualizar!');

    }

    public function destroy(string $id)
    {
        $this->funcionario->where('id', $id)->delete();

        return redirect()->route('funcionarios.index');
    }
}
