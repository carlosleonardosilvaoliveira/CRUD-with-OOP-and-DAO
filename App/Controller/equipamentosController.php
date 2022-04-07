<?php

require_once ('../Model/Equipamentos.php');
require_once ('../Model/EquipamentosDAO.php');
require_once ('../../Config/Database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])){
    $method = $_POST['method'];
    if(method_exists('equipamentosController', $method)){
        $equips = new equipamentosController;
        $equips->$method($_POST);
    }else{
        echo 'Metodo incorreto';
    }
}

    class equipamentosController{
        
        function insere(){
            $numero = $_POST['numero'];
            $ponto  = $_POST['ponto'];
            $marca  = $_POST['marca'];

            $conexao        = new Database();
            $equipamentos   = new Equipamentos();
            $equipamentos->setNumero($numero);
            $equipamentos->setPonto($ponto);
            $equipamentos->setMarca($marca);

            $equipamentosDao = new EquipamentosDAO();
            $equipamentosDao->adiciona($conexao, $equipamentos);

            header('Location:../../index.php');
        }
    }