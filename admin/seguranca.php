<?php
ob_start();
if(($_SESSION['usuarionome'] == "") || ($_SESSION['usuarioemail'] == "") || ($_SESSION['usuarionivel'] == "")){
    unset(
        $_SESSION['usuarionome'],
        $_SESSION['usuarioemail'],
        $_SESSION['usuarionivel']
    );
    // MSG DE ERRO
    $_SESSION['loginerro'] = "<div class=\"alert alert-danger\" role=\"alert\">
                                Área Restrita, Somente para Usuários Cadastrados.
                              </div>";
    header("Location: index.php");
}

?>