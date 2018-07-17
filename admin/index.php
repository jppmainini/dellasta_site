<?php
    session_start();
    include_once ('conectadb.php');
    $empresas = mysqli_query($conectar, "select * from empresas");
    $rowempresas = mysqli_num_rows($empresas);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Dellasta Informática</title>
    <link rel="icon" href="img/icon.png">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

    <!-- CSS PROPRIO -->
    <link rel="stylesheet" href="css/custom.css">

</head>
<body class="text-center">
    <?php
        unset(
            $_SESSION['usuarionome'],
            $_SESSION['usuarioemail'],
            $_SESSION['usuarionivel'],
            $_SESSION['selempresa']
        );

    ?>

    <form class="form-signin" method="post" action="valida_login.php">
        <p class="">
            <?php
            if(isset($_SESSION['loginerro'])){//isset mandar imprimir
                echo $_SESSION['loginerro']; //echo imprimir
                unset($_SESSION['loginerro']); //unset destoi a variavel
            }
            ?>
        </p>
        <img class="mb-4" src="img/icon.png" alt="" width="32" height="32">
        <h1 class="h3 mb-3 font-weight-normal">Acesso Restrito</h1>
        <div class="mb-2"">
        <select class="custom-select" name="selempresa" required>
            <?php while ($emp = mysqli_fetch_array($empresas)){?>
            <option value="<?php echo $emp['empcodigo']?>"><?php echo $emp['empfantasia']?></option>
            <?php }?>
        </select>
        </div>
        <label for="inputEmail" class="sr-only">Seu Email</label>
        <input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="Seu Email" required autofocus>
        <label for="inputPass" class="sr-only">Senha</label>
        <input type="password" id="inputPass" name="senha" class="form-control" placeholder="Senha" required >
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Manter Conectado
</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

        <p class="mt-5 mb-3 text-muted">&copy Dellasta Informática</p>
    </form>



<!-- JS BOOTSTRAP -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
<script src="bootstrap/assets/js/vendor/popper.min.js"></script>
</body>


</html>