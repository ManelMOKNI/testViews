<?php
include "../entities/reclamation.php";
include "../core/reclamationC.php";
$e = new Reclamation($_POST['full_name'],$_POST['email'],$_POST['phone'],$_POST['toDayDate'],$_POST['id'],$_POST['text']);
//var_dump($e);
$ec=new reclamationC();
//insert our object in data base
$ec->ajoutR($e);
echo 'done';
//read out data in the affiche page
//header('location:index.php');

?>