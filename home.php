<?
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: index.php?erro=1');
    }
?>
<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Game Party</title>
		
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
	            <li><a href="consultas.php">Consultas</a></li>
	          </ul>
	      </div>
	    </nav>

           <div class="container">
	    	
	    	<br /><br />
                
                <!--/Cadastrar comprador-->
                <div class="row">
                    <div class="col-md-4">
                        
                        <form method="POST" action="registra_comprador.php" id="Comprador">
                        <h3>Cadastrar comprador</h3>
                         <div class="form-group">
                    <input type="text" class="form-control" id="campo_comprador" name="comprador" placeholder="Nickname" />
                </div>								
                <div class="form-group">
                    <input type="text" class="form-control red" id="campo_telefone" name="telefone" placeholder="Telefone" />
                </div>
                    <button type="buttom" class="btn btn-primary" id="btn_login">Cadastrar</button>
                 <br /><br />
               </form>
                    <?php

if($erro == 1){
echo '<font color="#FF0000">Usuário não cadastrado</font>';
}
?>
                    </div>
                    
                    
                    <!--/Cadastrar compras-->
	    	<div class="col-md-4">
                    <form method="POST" action="registr_compras.php" id="Comprador">
                        <h3>Compras</h3>
                        <select class="form-control form-control-lg" name="fichas">
                            <option>Fichas</option>
                            <option>R$1,00</option>
                            <option>R$0,75</option>
                            <option>R$0,50</option>
                            <option>R$0,25</option>
                        </select>
                        <p> </p>
                        <p> </p>
                        <p> </p>
                <div class="form-group">
                    <input type="text" class="form-control red" id="campo_qtd" name="qtd" placeholder="Quantidade" />
                </div>
                    <button type="buttom" class="btn btn-primary" id="btn_login">Comprar</button>
                 <br /><br />
               </form>
                        </div>
			
                    <!--/Pontuação-->
                    <div class="col-md-4">
                        <form method="POST" action="registra_pontos.php" id="Comprador">
                        <h3>Pontuação</h3>
                         <div class="form-group">
                    <input type="text" class="form-control" id="campo_comprador" name="comprador" placeholder="Apelido" />
                </div>								
                <div class="form-group">
                    <input type="text" class="form-control red" id="campo_pontuacao" name="pontuacao" placeholder="Pontos" />
                </div>
                    <button type="buttom" class="btn btn-primary" id="btn_login">Pontuar</button>
                 <br /><br />
               </form>
                        </div>
                        
</div>
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

