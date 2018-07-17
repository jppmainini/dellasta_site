<?php
include_once ('conectadb.php');
    $id = $_GET['id'];
    //EXECUTA CONSULTA
    $result = mysqli_query($conectar, "select * from usuarios where userid = '$id' LIMIT 1");
    $resultado = mysqli_fetch_assoc($result);
?>
<div class="border-bottom">
    <br>
    <h1 class="h2">Editar de Usuários</h1>
</div>
<form class="needs-validation" method="post" action="processa/pro_edita_usuarios.php" novalidate>
    <input type="hidden" name="id" value="<?php echo $resultado['userid']?>">
    <fieldset disabled>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Código</label>
                <input type="text" class="form-control"name="userid" value="<?php echo $resultado['userid']?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Data de Inclusão</label>
                <input type="text" class="form-control" name="userdatainclusao" value="<?php echo $resultado['userdatainclusao']?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Data Ultima Alteração</label>
                <input type="text" class="form-control" name="userdataautera" value="<?php echo $resultado['userdataalteracao']?>">
            </div>
        </div>
    </fieldset>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Nome</label>
            <input type="text" class="form-control" name="usernome" id="validationCustom01" placeholder="Nome Completo" value="<?php echo $resultado['usernome']?>" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Usuário</label>
            <input type="text" class="form-control" name="userusuario" id="validationCustom02" placeholder="Usuário" value="<?php echo $resultado['userusuario']?>" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom03">Senha</label>
            <input type="password" class="form-control" name="usersenha" id="validationCustom03" placeholder="Senha" value="<?php echo $resultado['usersenha']?>" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom04">Email</label>
            <input type="email" class="form-control" name="useremail" id="validationCustom04" placeholder="Email" value="<?php echo $resultado['useremail']?>" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label>Nivel</label>
            <select class="custom-select form-control" name="usernivel" required>

                <option value="1" <?php
                if($resultado['nivel_acesso_id'] == 1){
                    echo "selected";
                }
                ?>>Administrador</option>
                <option value="2" <?php
                if($resultado['nivel_acesso_id'] == 2){
                    echo "selected";
                }
                ?>>Operador</option>
                <option value="3" <?php
                if($resultado['nivel_acesso_id'] == 3){
                    echo "selected";
                }
                ?>>Usuário</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>

        </div>
        <div class="col-md-3 mb-3">

        </div>

    </div>
    <div class="btn">
        <button class="btn btn-primary" type="submit">Gravar</button>
        <button class="btn btn-danger" type="button" onclick="window.location.href='admin.php?link=2'">Cancelar</button>
    </div>
</form>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
