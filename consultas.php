<?
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: index.php?erro=1');
    }
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
                    <ul class="nav navbar-nav navbar-right">
	            <li><a href="home.php">Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

                <div class="col-md-3">
                    
                </div>
	    	<div class="col-md-3">
	    		
                <br />
                
			</div>
			<div class="col-md-3"></div>
                        
<?php
include 'db.php';
$consulta = 'SELECT * FROM compras';
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
                        <table>
                            <tr>
                                <td>ID</td>
                                <td>Valores</td>
                                <td>Compras</td>
                            </tr>
                            <?php while($dado=$con->fetch_array()){?>
                            <tr>
                                <td><?php echo $dado['id'];?></td>
                                <td><?php echo $dado['tipo_ficha'];?></td>
                                <td><?php echo $dado['qtd'];?></td>
                            </tr>
                            <?php } ?>
                        </table>
			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>