<?php
session_start();
include_once ('../../seguranca.php');
include_once ('../../conectadb.php');
$id               = $_GET["del_id"];
$resultado = mysqli_query($conectar, "select clirazao from clientes where clicodigo = '$id'");
$linhas = mysqli_fetch_array($resultado);
$clinome = $linhas['clirazao'];
if ($id == 1){
    $_SESSION['cadclisucess']="<div class=\"alert alert-danger alert-dismissible fade show text-center\" role=\"alert\" id=\"success-alert\">
                                        Nao é possivel excluir<strong> - $clinome</strong>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>";
    header("Location: ../../admin.php?link=31");
}
else {
    $query = mysqli_query($conectar, "delete from clientes where clicodigo = '$id'");
    if (mysqli_affected_rows($conectar) != 0) {
        $_SESSION['cadclisucess'] = "<div class=\"alert alert-danger alert-dismissible fade show text-center\" role=\"alert\" id=\"success-alert\">
                                                <strong>$clinome - </strong> Excluido com Sucesso.
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>";
        header("Location: ../../admin.php?link=31");
    }
}
?>