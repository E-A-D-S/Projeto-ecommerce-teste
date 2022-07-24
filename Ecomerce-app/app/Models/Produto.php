<?php

namespace App\Models;


class Produto extends PModel
{
    protected $table = "produtos";

    protected $fillable = ['nome', 'foto','descricao', 'categoria_id', 'valor'];

}
