<!-- 
cadastro simples de usuário
@author Neemias Ramos Ferreira | e-mail: neemias.ferreira@fatec.sp.gov.br
@since 09/12/2017
-->
<?php

	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width user-scalable=no">

		<title>Inscrição do Cliente</title>
		
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
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4">
	    		<h3 align="center">Inscreva-se</h3>
	    		<br />
				<form method="post" action="registra_usuario_cliente.php" id="formCadastrarse">
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
						<input type="cidade" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required="requiored">
					</div>

					<button type="submit" class="btn btn-success form-control">Inscreva-se</button>
					
				</form>
			</div>
			<div class="col-md-4">
				<p>
					<h2 align="center">Informações</h2>
				</p>
			</div>
			<div class="col-md-4">
				
				<h3 align="center" >Login</h3>
	    		<br />
				<form method="post" action="validar_acesso_cliente.php" id="formLoginCliente">
					
					<div class="form-group">
						<input type="usuario" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required="requiored" maxlength="55">
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored" maxlength="32">
					</div>
					
					<button type="submit" class="btn btn-primary form-control" id="btn_login">Entrar</button>
				</form>
			</div>

			<div class="clearfix"></div>
			<br />
			

		</div><!-- container-->


	    </div>
	
		<script src="bootstrap/js/bootstrap.min.js"></script>
	
	</body>
</html>
