<?php
session_start();
include_once("seguranca.php");
include_once ("conectadb.php");

echo "Bem Vindo: ".$_SESSION['usuarionome'] .' - ' .$_SESSION['usuarioemail'] .' - ' .$_SESSION['usuarionivel'].' - '.$_SESSION['selempresa'];
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon.png">

    <title>Dellasta Informática - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/labelshow.css">
    <link rel="stylesheet" href="css/nav_custom.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
</head>

<body>
<!-- INICIO NAVBAR -->
<nav class="navbar navbar-dark fixed-top bg-primary
 flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php echo $_SESSION['usuarionome']?><br>
            <h6 class="badge m-md-0 "><?php echo $_SESSION['selempresa']?></h6>
        </a>

    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link text-white" href="sair.php"><i class="fas fa-power-off fa-lg"></i></a>
        </li>
    </ul>
</nav>
<!--  -->

<!-- INICIO CORPO -->
<div class="container-fluid">
    <div class="row">
        <!-- INICIO NAVBAR -->
        <?php include_once ('navmenulateral.php')?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <?php
                $link = $_GET["link"];

                $pag[1] = "bem_vindo.php";
                $pag[2] = "forms/cadastros/usuarios/listar_usuarios.php";
                $pag[3] = "forms/cadastros/usuarios/cad_usuario.php";
                $pag[4] = "forms/cadastros/usuarios/ditar_usuario.php";

                $pag[20] = "forms/cadastros/empresas/listar_empresas.php";
                $pag[21] = "forms/cadastros/empresas/cad_empresa.php";

                $pag[31] = "forms/cadastros/clientes/listar_clientes.php";
                $pag[32] = "forms/cadastros/clientes/cad_clientes.php";


                //PAGINAS DE PROCESSAMENTO
                $pag[100] = "processa/pro_cad_usuarios.php";
                $pag[101] = "processa/pro_cad_usuarios.php";
                $pag[102] = "processa/pro_excluir_usuario.php";
                $pag[103] = "processa/cadusuarios/exclui_multi.php";
                $pag[104] = "processa/cadusuarios/busca_usuario.php";

                if(!empty($link)){
                    if(file_exists($pag[$link])){
                        include $pag[$link];
                    }
                    else{
                        include "bem_vindo.php";
                    }
                }
                else{
                    include "bem_vindo.php";
                }
            ?>

        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="bootstrap/assets/js/vendor/popper.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/buscacep.js"></script>
<script src="js/mask.js"></script>


<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

</body>
</html>
