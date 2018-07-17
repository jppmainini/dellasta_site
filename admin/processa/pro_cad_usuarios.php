<?php
session_start();
include_once ('../seguranca.php');
include_once ('../conectadb.php');
$usernome      = $_POST["usernome"];
$userusuario      = $_POST["userusuario"];
$usersenha        = $_POST["usersenha"];
$useremail        = $_POST["useremail"];
$usernivel        = $_POST["usernivel"];


$result = mysqli_query($conectar, "select max(userid) as id from usuarios") or die(mysqli_error(conectar));
$resultado = mysqli_fetch_assoc($result);
$maxid = $resultado['id'];
$maxid++;
$query = mysqli_query($conectar, "insert into usuarios(userid, usernome, useremail, userusuario, usersenha, nivel_acesso_id, userdatainclusao) values ($maxid,'$usernome', '$useremail', '$userusuario', '$usersenha', '$usernivel', NOW())");
    if (mysqli_affected_rows($conectar) != 0){
        $_SESSION['cadusersucess']="<div class=\"alert alert-warning alert-dismissible fade show text-center\" role=\"alert\" id=\"success-alert\">
                                        <strong>$usernome - </strong> Cadastrado com Sucesso.
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>";
        header("Location: ../admin.php?link=2");
    }
?>