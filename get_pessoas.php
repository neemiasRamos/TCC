<?php
	//	session_start();
	//	iniciar a sessão

	//	if(!isset($_SESSION['usuario'])){
	//		header('Location: index.php?erro=1');
	//	}
	//verificar se o usuário esta autenticado

	require_once('bd.class.php');
	//recuperar a classe de conexão com o banco de dados

	//$nome_pessoa = $_POST['nome_pessoa'];
	//varia nome_pessoa que vai receber via POST o parametro informado no formulário

	$area_atua = $_POST['area_atua'];
	//$id_usuario = $_SESSION['id_usuario'];
	//id do usuário sendo recuperado da variavel superglobal SESSION

	$objDb = new bd();
	$link = $objDb->conecta_mysql();
	//instancia da classe de conexão

	$sql = "SELECT * FROM usuarios WHERE areaatuacao like '%$area_atua%' "; //AND id <> $id_usuario"
	//consulta no banco que seleciona todos os registros da tabela usuário onde o usuário for igual ao nome passado na variavel $nome_pessoa. SUPONHAMOS que o usuário tenha o mesmo nome que oque foi pesquisado então especificamos que o id do usuário deve ficar fora da pesquisa caso o nome pesquisado for igual ao nome do usuario pesquisando 

	$resultado_id = mysqli_query($link, $sql);
	//variavel recuperando o resource da exucação da query

	if($resultado_id){
		//testar se a execução da query foi feita com sucesso

		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			//havendo uma execução com sucesso, recuperasse os registros atraves da função mysqli_fetch_array e a cada interação do laço, a variavel $registro vai receber o registro em questão até percorrer todos os registros de retorno 
			//echo '<a href="#" class="list-group-item ">';
				//para imprimir a pesquisa é preciso concatenar com a variavel $registro que contem a iformação do retorno da consulta no indice que preferir, no caso aqui são os indices 'usuario' e 'email'.



				$abreApi ='<a href="https://api.whatsapp.com/send?phone=55';
				$fechaApi = '"target="blank" class="btn btn-success" type="button">Mensagem <i class="fa fa-whatsapp" aria-hidden="true"></i></a>';
				$ddd = $registro['ddd'];
				$celular = $registro['celular'];

				echo '<li class="list-group-item row ">';
				echo '<div class="col-md-1"><i class="glyphicon glyphicon-user pull-left"></i></div>';
				echo '<div class="col-md-9">';
				echo '<h4 class="list-group-item-heading"><strong>'.$registro['usuario'].'</strong></h4>';
				echo '<small class="list-group-item-text"><strong> Cidade: </strong>'.$registro['cidade'].'</small>';
				echo '<small class="list-group-item-text"><strong> Area de Atuação: </strong> '.$registro['areaatuacao'].'</small>';
				echo '<small class="list-group-item-text"><strong> Tipo de Serviço: </strong>'.$registro['tiposervico'].'</small>';
				echo '</div>';
				echo '<div class="col-md-1 text-right">';
				echo $abreApi.$ddd.$celular.$fechaApi;
				echo '</div>';
				echo '</li>';
				echo '</br>';
			

				/**
				echo '<a href="#" class="list-group-item ">';

 			
 						<li class="list-group-item row">
					      <div class="col-md-1"><i class="glyphicon glyphicon-bookmark pull-left"></i></div>
					      <div class="col-md-10">
					      <h4 class="list-group-item-heading"><a href="#">List group item heading</a></h4>
					      <small class="list-group-item-text">This text will have simple description about the text.</small>
					      </div>
					      <div class="col-md-1 text-right">123 <i class="glyphicon glyphicon-star"></i></div>
					    </li>
					    



				

				
				echo '<strong> Profissional: '.$registro['usuario'].'</strong>';
				echo '<br>';
				echo '<strong> Cidade: </strong>'.$registro['cidade'];
				echo '<br>';
				echo '<strong> Area de Atuação: </strong> '.$registro['areaatuacao'];
				echo '<br>';
				echo '<strong> Tipo de Serviço: </strong>'.$registro['tiposervico'];
				echo '<br>';
				


				$abreApi ='<a href="https://api.whatsapp.com/send?phone=55';
				$fechaApi = '"target="blank" class="btn btn-default" type="button">Entrar em contato</a>';
				$ddd = $registro['ddd'];
				$celular = $registro['celular'];
				
				echo '<p class="list-group-item-text pull-right">';
					echo $abreApi.$ddd.$celular.$fechaApi;
					//echo '<button type="button" class="btn btn-default">Entrar em contato</button>';
					//echo $abreApi.$ddd.$celular.$fechaApi;
				echo '</p>';
				echo '<div class="clearfix"></div>';
			echo '</a>';
				    */
			//var_dump($registro);
		}

	}else {
		echo 'Erro na consuta de usuários no banco de dados';

	}
	//mysqli_query($link, $sql);
			/**

					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">List</h3>
					  </div>

					  <ul class="list-group">
					    
					    <li class="list-group-item row">
					      <div class="col-md-1"><i class="glyphicon glyphicon-bookmark pull-left"></i></div>
					      <div class="col-md-10">
					      <h4 class="list-group-item-heading"><a href="#">List group item heading</a></h4>
					      <small class="list-group-item-text">This text will have simple description about the text.</small>
					      </div>
					      <div class="col-md-1 text-right">123 <i class="glyphicon glyphicon-star"></i></div>
					    </li>
					    

					    <li class="list-group-item row">
					      <div class="col-md-1"><i class="glyphicon glyphicon-bookmark pull-left"></i></div>
					      <div class="col-md-10">
					      <h4 class="list-group-item-heading"><a href="#">List group item heading 1</a></h4>
					      <small class="list-group-item-text">This text will have simple description about the text.</small>
					      </div>
					      <div class="col-md-1 text-right">560 <i class="glyphicon glyphicon-star"></i></div>
					    </li>
					    <li class="list-group-item row">
					      <div class="col-md-1"><i class="glyphicon glyphicon-user pull-left"></i></div>
					      <div class="col-md-10">
					      <h4 class="list-group-item-heading"><a href="#">List group item heading 2</a></h4>
					      <small class="list-group-item-text">This text will have simple description about the text.</small>
					      </div>
					      <div class="col-md-1 text-right">340 <i class="glyphicon glyphicon-star"></i></div>
					    </li>
					    <li class="list-group-item row">
					      <div class="col-md-1"><i class="glyphicon glyphicon-bookmark pull-left"></i></div>
					      <div class="col-md-10">
					      <h4 class="list-group-item-heading"><a href="#">List group item heading 3</a></h4>
					      <small class="list-group-item-text">This text will have simple description about the text.</small>
					      </div>
					      <div class="col-md-1 text-right">1004 <i class="glyphicon glyphicon-star"></i></div>
					    </li>
					  </ul>
					</div>











					echo '<a href="https://api.whatsapp.com/send?phone=55<?php echo $registro['ddd'];?><?php echo $registro['celular'];?>" class="btn btn-default">Entrar em contato</a>';
					echo '<a href="https://api.whatsapp.com/send?phone=55" class="btn btn-default">Entrar em contato</a>';
					//

			<a href="https://api.whatsapp.com/send?phone=5514<?php echo $customer['phone']; ?>" target="blank" class="btn btn-sm btn-warning">
				<i class="fa fa-pencil"></i> Enviar msg
			</a>
			*/
?>

