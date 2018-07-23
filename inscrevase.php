<?php

	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width user-scalable=no">

		<title>Inscrição do Profissional</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
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
	          <img src="imagens/icone.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	    
	    <div class="visible-sm visible-xs">
	    	<h2>Por Favor, acesse essa pagina através de um desktop ou notebook. Obrigado!</h2>
	    </div>
	    
	    <div class="container visible-lg visible-md">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Inscreva-se já.</h3>
	    		<br />
				<form method="post" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored" maxlength="55">
						<?php
							if($erro_usuario){ // 1--- true 0--- false
								echo '<font style="color:#FF0000">Usuário já existe</font>';
							}

						?>
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored" maxlength="100">
						<?php
							if($erro_email){
								echo '<font style="color:#FF0000">E-mail já existe</font>';
							}

						?>
					</div>

					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored" maxlength="32">
					</div>
					
					<div class="form-group">
						<input type="cidade" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required="requiored" maxlength="30">
					</div>
					
					<div class="form-group">
						<input type="areaatuacao" class="form-control" id="areaatuacao" name="areaatuacao" placeholder="Area de Atuação" required="requiored" maxlength="30">
					</div>

					<div class="form-group">
						<input type="tiposervico" class="form-control" id="tiposervico" name="tiposervico" placeholder="Tipo Servico " required="requiored" maxlength="30">
					</div>
					
					<!--
						<div class="form-group">
							<input type="ddd" class="form-control" id="ddd" name="ddd" placeholder="DDD" required="requiored"> 
						</div>
						<div class="form-group">
							<input type="celular" class="form-control" id="celular" name="celular" placeholder="Numero do Celular Profissional" required="requiored">
						</div>
					-->
					<div class="row form-group">
						<div class="form-group col-xs-3">
							<input type="ddd" class="form-control" id="ddd" name="ddd" placeholder="DDD" required="requiored" size="2" maxlength="2"> 
						</div>

						<div class="form-group col-xs-9">
							<input type="celular" class="form-control" id="celular" name="celular" placeholder="Numero do Celular Profissional" required="requiored" maxlength="9">
						</div>

					</div>
					
					<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="bootstrap/js/bootstrap.min.js"></script>
	
	</body>
</html>