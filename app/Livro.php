<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public function Emprestimos(){
        return $this->hasMany('App\Emprestimo');
    }
}
