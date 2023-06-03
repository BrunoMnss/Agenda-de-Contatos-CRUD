<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdicionarContato;
use App\Http\Requests\EditarContato;
use App\Models\AgendaContatos;
use Illuminate\Http\Request;

class AgendaContatosController extends Controller
{
    protected $agendaContatos;

    public function __construct(AgendaContatos $agendaContatos)
    {
        $this->agendaContatos = $agendaContatos;
    }

    public function index(){
        $data=$this->agendaContatos->getAll();
        return view('contatos', compact('data'));
    }

    public function create(Request $request){
        return view('contatos_criar');
    }

    public function store(AdicionarContato $request){
        $created=$this->agendaContatos->store($request->validated());
        if(empty($created)){
            return redirect()->back();
        }
        return redirect()->route('contato.index');
    }

    public function edit(Request $request, $id){
        $contato=$this->agendaContatos->getContatoById($id);
        return view('contatos_editar', compact('contato'));
    }

    public function update(EditarContato $request, $id){
        $contato=$this->agendaContatos->updateById($id, $request->validated());
        return redirect()->route('contato.index');
    }

    public function delete(Request $request, $id){
        $contato=$this->agendaContatos->deleteById($id);
        return redirect()->route('contato.index');
    }
}
