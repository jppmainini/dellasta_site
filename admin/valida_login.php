<?php
session_start();
include_once ("conectadb.php");

$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
$empresa = $_POST['selempresa'];

//busca empresa
$queryempresa = mysqli_query($conectar, "select * from empresas where empcodigo = '$empresa' limit 1");
$resultempresa = mysqli_fetch_assoc($queryempresa);
if(empty($resultempresa)){
    //MSG ERRO
    $_SESSION['loginerro'] = "<div class=\"alert alert-danger\" role=\"alert\">
                                Empresa nao selecionada
                              </div>";

    //MANDA O USUARIO PARA LOGIN
    header("Location: index.php");
}
//VERIFICA USUARIO CADASTRADO
$result = mysqli_query($conectar, "select * from usuarios where userusuario = '$usuariot' and usersenha = '$senhat' limit 1");
$resultado = mysqli_fetch_assoc($result);
//echo "Usuario: ".$resultado["usernome"];
$userid = $resultado["userid"];
$empresa2 = $resultempresa['empcodigo'];

$result2 = mysqli_query($conectar, "select * from empusuarios where userid = '$userid' and empcodigo = '$empresa2' limit 1");
$resultado2 = mysqli_fetch_assoc($result2);


if (empty($resultado)){
    //MSG ERRO
    $_SESSION['loginerro'] = "<div class=\"alert alert-danger\" role=\"alert\">
                                Usuario e senha invalidos
                              </div>";

    //MANDA O USUARIO PARA LOGIN
    header("Location: index.php");
}
elseif (!empty($resultado) and (empty($resultado2))){
    //MSG ERRO
    $_SESSION['loginerro'] = "<div class=\"alert alert-danger\" role=\"alert\">
                                Usuario sem permissão para empresa selecionada
                              </div>";

    //MANDA O USUARIO PARA LOGIN
    header("Location: index.php");
}



else{
    //DEFINE VALORES ATRIBUIDOS NA SESSAO DO USUARIO
    $_SESSION['usuarionome'] =$resultado['usernome'] ;
    $_SESSION['usuarioemail'] =$resultado['useremail'] ;
    $_SESSION['usuarionivel'] =$resultado['nivel_acesso_id'] ;
    $_SESSION['selempresa'] = $resultempresa['empfantasia'];

    if($_SESSION['usuarionivel'] == 1) {
        header("Location: admin.php?link=1");
    }
    elseif ($_SESSION['usuarionivel'] == 2){
        header("Location: permissao.php");
    }
    else{
        header("Location: index.php");
    }
}

?>