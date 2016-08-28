<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function Emprestimos(){
        return $this->hasMany('App\Emprestimo');
    }
}
