<?php
session_start();
include_once("seguranca.php");

echo "Bem Vindo: ".$_SESSION['usuarionome'] .' - ' .$_SESSION['usuarioemail'] .' - ' .$_SESSION['usuarionivel'];

?>

