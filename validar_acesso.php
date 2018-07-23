<!-- 
classe php para validar as informações do login de usuário
@author Neemias Ramos Ferreira | e-mail: neemias.ferreira@fatec.sp.gov.br
@since 09/12/2017
-->
<?php
	
	session_start();

	//trazer o arquivo bd.class.php
	require_once('bd.class.php');
	
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	//montar a query

	$sql = "SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
		//$sql só retorna o registro se as duas informações são verdadeiras, por isso foi usado o operador AND
	
	//fazer uma instancia da classe
	$objDb = new bd();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql); //essa função, fez a conexão e a consulta, a partir dessas variaveis : $link (conexão) $sql(consulta)

	if($resultado_id){

		$dados_usuario = mysqli_fetch_array($resultado_id); // retorna os dados em estrutura de array
		//var_dump($dados_usuario);

		if(isset($dados_usuario['usuario'])){//se o array estiver preenchido
			
			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['usuario'] = $dados_usuario['usuario']; //estamos atribuindo ao indice usuario da superGlobal SESSION -->> ( $_SESSION['usuario'] ) o $dados_usuario no indice usuário --->>> ( $dados_usuario['usuario'] )
			$_SESSION['email'] = $dados_usuario['email'];

			header('Location: home.php');
		}else{
			header('Location: index.php?erro=1'); //erro1 == paramentro via GET
		}
	}else{
		echo "Erro na execução da consulta, favor entrar em contato com o admin do site";
	}
	
	
	//update true/false
	//insert true/false
	//select false/resource
	//delete true/false

?>
