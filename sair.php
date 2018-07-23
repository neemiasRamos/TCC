<!-- 
classe php para efetuar o logout da sessão
@author Neemias Ramos Ferreira | e-mail: neemias.ferreira@fatec.sp.gov.br
@since 09/12/2017
-->
<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);

header('Location: index.php');

?>
