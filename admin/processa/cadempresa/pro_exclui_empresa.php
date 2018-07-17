<?php
session_start();
include_once ('../../seguranca.php');
include_once ('../../conectadb.php');
$id               = $_GET["del_id"];
$resultado = mysqli_query($conectar, "select emprazao from empresas where empcodigo = '$id'");
$linhas = mysqli_fetch_array($resultado);
$usernome = $linhas['emprazao'];
if ($id == 1){
    $_SESSION['cadempresasucess']="<div class=\"alert alert-danger alert-dismissible fade show text-center\" role=\"alert\" id=\"success-alert\">
                                        Nao é possivel excluir<strong> - $usernome</strong>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>";
    header("Location: ../../admin.php?link=20");
}
else {
    $query = mysqli_query($conectar, "delete from empresas where empcodigo = '$id'");
    if (mysqli_affected_rows($conectar) != 0) {
        $_SESSION['cadempresasucess'] = "<div class=\"alert alert-danger alert-dismissible fade show text-center\" role=\"alert\" id=\"success-alert\">
                                                <strong>$usernome - </strong> Excluido com Sucesso.
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>";
        header("Location: ../../admin.php?link=20");
    }
}
?>