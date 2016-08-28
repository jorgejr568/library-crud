<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacaoLidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacao_lida', function (Blueprint $table) {
            $table->bigInteger('id',true,true);
            $table->bigInteger('notificacao_id',false,true);
            $table->bigInteger('administrador_id',false,true);
            $table->foreign('notificacao_id')->references('id')->on('notificacoes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('administrador_id')->references('id')->on('administrador')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notificacao_lidas');
    }
}
