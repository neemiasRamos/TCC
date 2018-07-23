    <?php

        $idestado = $_GET['estado'];

        mysql_connect('localhost','root','');
        mysql_selectdb('defesa_bd');

       $result = mysql_query("SELECT * FROM cidade WHERE estado = ".$idestado);

       while($row = mysql_fetch_array($result) ){
            echo "<option value='".$row['nome']."'>".$row['nome']."</option>";

       }

    ?>