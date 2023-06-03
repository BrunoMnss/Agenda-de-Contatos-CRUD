<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaContatos extends Model
{
    use HasFactory;

    protected $table = 'agenda_contatos';

    protected  $fillable = [
        'nome',
        'idade',
        'telefone',
        'email',
        'cidade',
        'estado',
    ];

    public function store($data){
        return $this->create($data);
    }

    public function getAll(){
        return  $this->select('id', 'nome' , 'idade', 'telefone' , 'email', 'cidade' , 'estado')->get();
    }

    public function getContatoById($id){
        return $this->select('id', 'nome' , 'idade', 'telefone' , 'email', 'cidade' , 'estado')->where('id', $id)->first();
    }

    public function updateById($id, $data){
        return $this->where('id', $id)->update($data);
    }

    public function deleteById($id){
        return $this->where('id', $id)->delete();
    }
}
