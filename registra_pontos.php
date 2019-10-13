<?php
require_once('db.php');

    $apelido = $_POST['comprador'];
    $pontos = $_POST['pontuacao'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    

    //executar a query
    if(mysqli_query($link, $sql)){
        header('Location: home.php'); 
    }else{
        header('Location: home.php?erro==1');
    }
?>    