<?php
require_once 'connection.php';

if(!empty($_GET['id'])){
      $id = $_GET['id'];

//      $stmt = $pdo->prepare( "DELETE FROM clients WHERE id =:id" );
      $stmt = mysql_query("DELETE FROM clients WHERE id = '$id'");
      header("Location:index.php");
}

