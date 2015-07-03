<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * comando = php artisan make:model Banco -m
 * Class Banco
 * @package App
 */
class Banco extends Model
{
    private $table="bancos";
    private $timestamps=true;
    private $id_column="id";
    private $nome_column="nome";
    private $ativo_column="ativo";
    private $endereco_column="endereco";
    private $codigo_febraban_column="codigo_febraban";


    public function setNome($nome){
        return self::setAttribute($nome_column, $nome);
    }




}
