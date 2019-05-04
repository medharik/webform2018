<?php 
include_once "module.php";
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
store($libelle,$prix);
//redirection 
header("location:index.php");
?>