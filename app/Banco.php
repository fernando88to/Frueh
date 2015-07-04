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
    protected $table="bancos";
    public $timestamps=true;
    private $id_column="id";
    private $nome_Coluna="nome";
    private $ativo_column="ativo";
    private $endereco_column="endereco";
    private $codigo_febraban_column="codigo_febraban";


    public function setNome($nome){
        return self::setAttribute($this->nome_Coluna, $nome);

    }

    public function  getNome(){
        return self::getAttribute($this->nome_Coluna);
    }

    public function isAtivo(){
        $ativo = self::getAttribute($this->ativo_column);
        if($ativo==1){
            return true;
        }elseif($ativo==0){
            return false;
        }elseif($ativo==null){
            return null;
        }else{
            return false;
        }
    }
    public function setAtivo($ativo){
        if($ativo==1){
            self::setAttribute($this->ativo_column,true);
        }elseif($ativo==0){
            self::setAttribute($this->ativo_column,false);
        }elseif($ativo==null){
            self::setAttribute($this->ativo_column,null);
        }else{
            self::setAttribute($this->ativo_column,false);
        }
    }

    public function  getEndereco(){
        return self::getAttribute($this->endereco_column);
    }

    public function  setEndereco($endereco){
        self::setAttribute($this->endereco_column,$endereco);
    }

    public function setCodigoFebrabam($codigo){
        self::setAttribute($this->codigo_febraban_column,$codigo);

    }

    public function  getCodigoFebrabam(){
        return self::getAttribute($this->codigo_febraban_column);
    }



}
