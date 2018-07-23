<!-- 
pagina para efetuar a pesquisa por profissionais
@author Neemias Ramos Ferreira | e-mail: neemias.ferreira@fatec.sp.gov.br
@since 14/12/2017
-->
<?php
	
	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width user-scalable=no">

		<title>Procurar Pessoas</title>
		
		<!-- jquery - link cdn -->
		
		<script src="bootstrap/js/jquery.min.js"></script>
		<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> -->

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<script type="text/javascript">
			
			$(document).ready(function(){

				//associar o evento de click ao botão
				$('#btn_procurar_pessoas').click(function(){

					//alert($('#texto_tweet').val());
					//if($('#nome_pessoa').val().length > 0){  
						if($('#area_atua').val().length > 0){
						//alert('Campo preenchido');
						$.ajax({
							url: 'get_pessoas.php',
							method: 'post',
							data: $('#form_procurar_pessoas').serialize(),
							//data: { texto_tweet: $('#texto_tweet').val() },
							//data: { chave1: valor1, cahve2: valor2 }
							success: function(data){
								//se a requisição for feita com sucesso, recupera o responce text do script (data) e faz a atribuição dessa informação no campo com o id pessoas. Passa essa informação para a função seletora do Jquery e diz que o conteudo interno dessa div para a ser o responce text (data)
								$('#pessoas').html(data);
								
							}
						});
					}
				});

			});

		</script>
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
				
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
			
			<div class="container">
	       	
			<!--
	       	<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4>Olá <?= $_SESSION['usuario'] ?> </h4>
						<hr />
						<div class="col-md-6">
							Informações <br /> ....
						</div>
						<div class="col-md-6">
							Informações <br /> ....
						</div>
					</div>
				</div>
			</div>
			-->
	    	<div class="col-md-9">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    			<span><h3>Por qual profissional você procura ?</h3></span>
	    				<form id="form_procurar_pessoas" class="input-group">

	    				<!--
	    					<input type="text" id="nome_pessoa" class="form-control" placeholder="Eletricista, Tecnico em informática, Manicure, Mecânico...." maxlength="140" name="nome_pessoa" />
						-->
	    					<input type="text" id="area_atua" class="form-control" placeholder="Eletricista, Tecnico em informática, Manicure, Mecânico...." maxlength="140" name="area_atua" />
	    					
	    					<span class="input-group-btn">
	    						<button class="btn btn-default" id="btn_procurar_pessoas" type="button">Procurar</button>
	    					</span>
	    				</form>
	    			</div>
	    		</div>

	    		 <ul id="pessoas" class="list-group">

	    		</ul>

<!--
	    		<div id="pessoas" class="list-group">
	    			
	    		</div>
-->
			</div>
			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-body">
							Publicidade
					</div>
				</div>
			</div>


		</div>


	    </div>
	
		<script src="bootstrap/js/bootstrap.min.js"></script>
	
	</body>
</html>
