<h2 align="center">Cadastro de Clientes</h2>
<h3 align="center"><a href="insert.php">Novo Cliente</a></h3>
 <hr style="width:60%"> 
<center>
<b>Nome</b>&nbsp;&nbsp;<b>E-mail</b>&nbsp;&nbsp;<b>Action</b></br>

<?php
require_once 'connection.php';
$sql = "SELECT * FROM clients order by id desc";
//$stmt = $pdo->query($sql);
$stmt = mysql_query($sql, $link) or die($sql."<br/><br/>");// Correção: or die($sql."<br/><br/>")
//print_r($stmt);exit;

//while ($row = $stmt->fetch()) {
while ($row = mysql_fetch_array($stmt)) {

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    ?>

    <?=$name?>&nbsp;<?=$email?>&nbsp;<a href="update.php?id=<?=$id?>">Atualizar</a>&nbsp;&nbsp;
    <a href="delete.php?id=<?=$id?>" onclick="return confirm('Tem certeza de que deseja excluir este cliente ?')">Excluir</a></br>

<?php
}
?>

