<?php
require_once('db.php');

    $apelido = $_POST['comprador'];
    $telefone = $_POST['telefone'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO cadastro (apelido_id, telefone) VALUES ('$apelido','$telefone')";

    //executar a query
    if(mysqli_query($link, $sql)){
        header('Location: home.php');
    }else{
       header('Location: home.php?erro=1'); 
    }

?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

