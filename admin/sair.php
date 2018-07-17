<?php
session_start();
session_destroy();

//limpado dados de acesso das variaveis
unset(
    $_SESSION['usuarionome'],
    $_SESSION['usuarioemail'],
    $_SESSION['usuarionivel']
);
//redirecionando para login
header("Location: index.php");
?>