<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    public function Livro(){
        return $this->belongsTo('App\Livro');
    }
    public function Aluno(){
        return $this->belongsTo('App\Aluno');
    }
}
