<?
$conexao = mysql_connect($host, $user, $pass);
mysql_select_db($banco, $conexao);

$query = 'SELECT * FROM estados WHERE pais="' . $_GET['pais'] . '"';
$query = mysql_query($query, $conexao);
?>
<select name="estados" onchange="ajax('select_cidades.php?estado=' + this.value, 'cidades'>
<?
while($dados = mysql_fetch_array($query)
{
?>
    <option value="<?= $dados['id'] ?>">
        <?= $dados['estado'] ?>
    </option>
<?
}
?>
</select>