<!-- 
arquivo php para gerar resultados da pesquisa feira pelo usuário, onde o mesmo possa escolher pelo profissional e entrar em contato via Whatsapp
@author Neemias Ramos Ferreira | e-mail: neemias.ferreira@fatec.sp.gov.br
@since 09/12/2017
@version 2.9.1
-->
<?php
		session_start();
		iniciar a sessão

		if(!isset($_SESSION['usuario'])){
			header('Location: index.php?erro=1');
		}
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
			

				
		}

	}else {
		echo 'Erro na consuta de usuários no banco de dados';

	}
		echo '<a href="https://api.whatsapp.com/send?phone=55<?php echo $registro['ddd'];?><?php echo $registro['celular'];?>" class="btn btn-default">Entrar em contato</a>';
					echo '<a href="https://api.whatsapp.com/send?phone=55" class="btn btn-default">Entrar em contato</a>';
					//

			<a href="https://api.whatsapp.com/send?phone=5514<?php echo $customer['phone']; ?>" target="blank" class="btn btn-sm btn-warning">
				<i class="fa fa-pencil"></i> Enviar msg
			</a>
			*/
?>

