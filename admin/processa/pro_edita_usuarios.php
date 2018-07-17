<?php
session_start();
include_once ('../seguranca.php');
include_once ('../conectadb.php');
$id               = $_POST["id"];
$usernome         = $_POST["usernome"];
$userusuario      = $_POST["userusuario"];
$usersenha        = $_POST["usersenha"];
$useremail        = $_POST["useremail"];
$usernivel        = $_POST["usernivel"];


    $query = mysqli_query($conectar, "update usuarios set usernome = '$usernome', useremail = '$useremail', userusuario = '$userusuario', usersenha = '$usersenha', nivel_acesso_id = '$usernivel', userdataalteracao = NOW() where userid = '$id'");
    if (mysqli_affected_rows($conectar) != 0){
        $_SESSION['cadusersucess']="<div class=\"alert alert-primary alert-dismissible fade show text-center\" role=\"alert\" id=\"success-alert\">
                                        <strong>$usernome - </strong> Alterado com Sucesso.
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>";
        header("Location: ../admin.php?link=2");
    }




?>