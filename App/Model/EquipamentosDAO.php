<?php

class EquipamentosDAO{
    
    function adiciona(Database $conexao, Equipamentos $equipamentos){
        $query = "INSERT INTO equipamentos (numero, ponto, marca) VALUES ('{$equipamentos->getNumero()}', '{$equipamentos->getPonto()}', '{$equipamentos->getMarca()}')";
        mysqli_query($conexao->conecta(), $query);
    }
}