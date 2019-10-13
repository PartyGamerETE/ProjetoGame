<?php
require_once('db.php');
                                                   
    $quantidade = $_POST['qtd'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO compras (qtd) values ($quantidade)";
    //executar a query
    if(mysqli_query($link, $sql)){
        header('Location: home.php'); 
    }else{
        header('Location: home.php?erro==1');
    }
      ?>      