<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table='administradores';

    public function NotificacoesLidas(){
        return $this->belongsToMany('App\Notificacao','notificacao_lida','administrador_id','notificacao_id');
    }
}
