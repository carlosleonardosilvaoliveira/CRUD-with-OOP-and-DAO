<?php

class Equipamentos {
    private $id;
    private $numero;
    private $ponto;
    private $marca;

    //Funcoes SET
    public function setId($id){
        $this->id = $id;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setPonto($ponto){
        $this->ponto = $ponto;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }

    //Funcoes GET
    public function getId() {
        return $this->id;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getPonto(){
        return $this->ponto;
    }
    public function getMarca(){
        return $this->marca;
    }
}