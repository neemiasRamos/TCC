<?php

class bd{
	//host
	private $host = 'localhost';
	//usuario
	private $usuario = 'Administrador_N';
	//senha
	private $senha = '3025@2524F43R';
	//banco de dados
	private $database = 'defesa_bd';

	public function conecta_mysql(){

		//criar conexao
		// mysqli_connect(localizacao do bd, usuario de acesso, senha, banco de dados);

		$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);

		//ajusta o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utf8');

		//verificar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
		}

		return $con;
	}
}

?>
