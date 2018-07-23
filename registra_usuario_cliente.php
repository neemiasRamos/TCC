<!-- 
classe php para registrar o usuário no banco de dados
@author Neemias Ramos Ferreira | e-mail: neemias.ferreira@fatec.sp.gov.br
@since 09/12/2017
-->
<?php
	//trazer o arquivo bd.class.php
	require_once('bd.class.php');
	
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$cidade = $_POST['cidade'];

	//fazer uma instancia da classe
	$objDb = new bd();

	//executar função de conexão  "conecta_mysql" ** um detalhe importante, essa função "conecta_mysql" ela retorna a conexão em uma variavel "$con", por tanto, ao fazer a conexão do banco, é necessário recuperar o retorno dessa variavel $con junto com a função "conecta_mysql"
	// para isso sera usado uma variavel chamada "$link" para receber o retorno da função "conecta_mysql".
	$link = $objDb->conecta_mysql();

	$usuario_existe = false;
	$email_existe = false;

	//verificar se o usuário ja existe
	$sql = "select * from usuarios_clientes where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link, $sql)){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
		} 
	} else {
		echo "Erro ao tentar localizar o registro de usuário";
	}

	//verificar se o email ja existe
	$sql = "select * from usuarios_clientes where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['email'])){
			$email_existe = true;
		} 
	} else {
		echo "Erro ao tentar localizar o registro de usuário";
	}

	if($usuario_existe || $email_existe){

		$retorno_get = '';

		if($usuario_existe){
			$retorno_get.= "erro_usuario=1&";
		}

		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}

		header('Location: inscrevase.php?'.$retorno_get);
		die();	
	}

	
	//montar a query de INSERT 
	$sql = "insert into usuarios_clientes(usuario, email, senha, cidade) values('$usuario','$email','$senha','$cidade')";

	//executar a query >> mysqli_query(conxeão, $query);
	if(mysqli_query($link, $sql)){
		header('Location: login_cliente.php?');
	} else {
		echo "Erro ao registrar o usuário";
	}
?>
