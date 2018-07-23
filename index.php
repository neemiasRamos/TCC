<?php
	
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0; //if ternário, se a condição for verdadeira sera executado a instrução a esquerda do ':' caso for falsa sera executado a instrução a direita do ':' ||| caso o indice 'erro' da variavel $_GET exista(isset) então atribui para a variavel $erro o valor contido nesse indice, caso contrario atribua o valor de 0
	
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head> 
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width user-scalable=no">

		<title>Defesa</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- Bootstrap -->
    	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/estilo.css" rel="stylesheet">
	
	   	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<script>
			$(document).ready(function(){
				//verificar se os campos de usuário e senha foram devidamente preenchidos
				$('#btn_login').click(function(){

					var campo_vazio = false;

					if($('#campo_usuario').val() == ''){
						//alert('Campo usuário está vazio');
						//alterar o atributo visual do campo_usuario
						$('#campo_usuario').css({'border-color':'#A94442'})
						campo_vazio = true;
					} else{
						$('#campo_usuario').css({'border-color':'#CCC'})
					}

					if($('#campo_senha').val() == ''){
						//alert('Campo senha está vazio');
						$('#campo_senha').css({'border-color':'#A94442'})
						campo_vazio = true;
					} else{
						$('#campo_senha').css({'border-color':'#CCC'})
					}

					if(campo_vazio) return false;
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
	        	 <!-- <div class="collapse navbar-collapse">
      			essa classe faz o menu "sumir" quando o dispositivo tem uma tela pequena-->
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="home-teste.php">Pagina Teste</a></li> 
	            <li><a href="index - Copia.html">Index teste</a></li> 
	            <li class="visible-lg visible-md hidden-sm hidden-xs"><a href="inscrevase.php">Inscrever-se</a></li>

		            <li class="<?= $erro == 1 ? 'open' : '' ?>"><!-- teste ternário, verificando se a variavel $erro é igual a 1, caso for verdadeiro é feita a impressão do texto "open" caso contrario é feita a associação de um valor vazio-->
		            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
						<ul class="dropdown-menu" aria-labelledby="entrar">
							<div class="col-md-12">
					    		<p>Você possui uma conta?</h3>
					    		<br />
								<form method="post" action="validar_acesso_cliente.php" id="formLogin">
									<div class="form-group">
										<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
									</div>
									
									<div class="form-group">
										<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
									</div>
									
									<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
									
									<br/><br/>
									<a href="inscrevase_cliente.php">Cadastre-se</a>

									<br /><br />
									
								</form>
									<?php

										if($erro == 1){
											echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
										}

									?>	

							</div>
					  	</ul>
		            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron" align="center">
	        <h1 class="hidden-xs">Bem vindo ao ...</h1>
	        <h3 class="visible-xs">Bem vindo ao ...</h3>
	        <p>slogan...</p>
	        	<a href="inscrevase_cliente.php" class="btn btn-custom btn-roxo btn-lg" >Procurar Profissioais</a>
        		<a href="inscrevase.php" class="btn btn-custom btn-roxo btn-lg  hidden-sm hidden-xs" >Quero fazer parte</a>
	      </div>

	      <!-- CONTEÚDOS -->
		    <section id="servicos">
		      <div class="jumbotron"><!-- <div class="container"> -->
		        <div class="row">
		        <!-- albuns -->
		          <div class="col-md-6 visible-lg visible-md hidden-sm hidden-xs " >

		            <div class="row albuns">
		              <div class="col-md-6">
		                <img src="imagens/img1.jpg" class="img-responsive">
		              </div>

		              <div class="col-md-6">
		                <img src="imagens/img2.jpg" class="img-responsive">
		              </div>
		            </div><!--/row -->
		          
		          <div class="row albuns">
		              <div class="col-md-6">
		                <img src="imagens/img3.jpg" class="img-responsive">
		              </div>

		              <div class="col-md-6">
		                <img src="imagens/img4.jpg" class="img-responsive">
		              </div>
		            </div><!--/row -->
		          
		          </div>
		        <!-- serviços -->
		          <div class="col-md-6"  >
		          <h2>Como Funciona ?</h2>

		          <h3>Profissionais</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


		          <h3>Clientes</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


		          <h3>O Contato</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		            
		          </div>  
		        </div>
		      </div>
		    </section>

		    <section id="recursos">
		      <div class="container">
		        <div class="row">
		          <!-- recursos -->
		          <div class="col-md-4">
		             <h2>Fácil</h2>

		          <h3>Buscar</h3>
		          <p>Já sabe oque quer? É só procurar e clicar em "contato".</p>


		          <h3>Navegar</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


		          <h3>Descobrir</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		          </div>
		          <!-- img recursos -->
		          <div class="col-md-8 visible-lg visible-md hidden-sm hidden-xs ">
		              <div class="row rotacionar">

		              <div class="col-md-6">
		                <img src="imagens/iphone5.png" class="img-responsive">
		              </div>

		              <div class="col-md-6">
		                <img src="imagens/iphone5.png" class="img-responsive">
		              </div>
		            </div><!--/row -->
		          </div>
		        </div>
		      </div>
		    </section>



	      <div class="clearfix"></div>
		</div><!-- container-->

			<!-- RODAPÉ -->
			    <footer id="rodape">
			      <div class="container">
			        <div class="row">
			          <div class="col-md-2">
			            <span class="img-logo">LOGO</span>
			          </div>

			          <div class="col-md-2">
			            <h4>Empresa</h4>
			            <ul class="nav">
			              <li><a href="#">Sobre</a></li>
			              <li><a href="#">Empregos</a></li>
			              <li><a href="#">Imprensa</a></li>
			              <li><a href="#">Novidades</a></li>
			            </ul>
			          </div><!-- /col-md-2-->

			          <div class="col-md-2">
			            <h4>Comunidades</h4>
			            <ul class="nav">
			              <li><a href="#">Desenvolvedores</a></li>
			              <li><a href="#">Marcas</a></li>
			              
			            </ul>
			          </div><!-- /col-md-2-->

			          <div class="col-md-2">
			            <h4>Links úteis</h4>
			            <ul class="nav">
			              <li><a href="#">Ajuda</a></li>
			              
			            </ul>
			          </div><!-- /col-md-2-->

			          <div class="col-md-4">
			            <ul class="nav">
			              <li class="item-rede-social"><a href="#"><img src="imagens/facebook.png"></a></li>
			              <li class="item-rede-social"><a href="#"><img src="imagens/twitter.png"></a></li>
			              <li class="item-rede-social"><a href="#"><img src="imagens/instagram.png"></a></li>
			            </ul>    
			          </div><!-- /col-md-4-->

			        </div><!--/row -->
			      </div>
			    </footer>
	    </div>
	 	<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	
	</body>
</html>