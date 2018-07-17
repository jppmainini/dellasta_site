            <div class="border-bottom">
                <h1 class="h2">Cadastro de Usuários</h1>
            </div>
            <form class="needs-validation" name="fmcadusuario" id="fmcadusuario" method="post" action="processa/pro_cad_usuarios.php" novalidate>
                <fieldset disabled>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="disabledTextInput">Código</label>
                            <input type="text" class="form-control form-control-sm" id="disabledTextInput" name="userid">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Data de Inclusão</label>
                            <input type="text" class="form-control form-control-sm" name="userdatainclusao">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Data Ultima Alteração</label>
                            <input type="text" class="form-control form-control-sm" name="userdataautera">
                        </div>
                    </div>
                </fieldset>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Nome</label>
                        <input type="text" class="form-control form-control-sm" name="usernome" id="validationCustom01" placeholder="Nome Completo" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Usuário</label>
                        <input type="text" class="form-control form-control-sm" name="userusuario" id="validationCustom02" placeholder="Usuário" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom03">Senha</label>
                        <input type="password" class="form-control form-control-sm" name="usersenha" id="validationCustom03" placeholder="Senha" required>
                        <div class="invalid-feedback">
                            Digite a Senha

                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Senha</label>
                        <input type="password" class="form-control form-control-sm" name="confusersenha" id="validationCustom05" onchange="confirmasenha()" placeholder="Confirme sua Senha" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04">Email</label>
                        <input type="email" class="form-control form-control-sm" name="useremail" id="validationCustom04" placeholder="Email" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Nivel</label>
                        <select class="custom-select form-control form-control-sm" name="usernivel" required>
                            <option value="" selected>Selecione um Nivel</option>
                            <option value="1">Administrador</option>
                            <option value="2">Operador</option>
                            <option value="3">Usuário</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>

                    </div>
                    <div class="col-md-3 mb-3">

                    </div>
                </div>
                <div class="btn">
                    <button class="btn btn-primary btn-sm" name="btn-submit" id="send" type="submit" onclick="return confirmasenha()">Gravar</button>
                    <button class="btn btn-danger btn-sm" type="button" onclick="window.location.href='admin.php?link=2'">Cancelar</button>
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
            <script language="JavaScript">
                /*function deleteuser(delid) {
                    if (confirm("Deseja realmente excluir o usuario ?")){
                        window.location.href="processa/pro_excluir_usuario.php?del_id="+delid;
                        return true;
                    }
                }*/
                function confirmasenha() {
                    form = document.fmcadusuario;
                    senha1 = document.fmcadusuario.usersenha.value
                    senha2 = document.fmcadusuario.confusersenha.value
                    if ((senha1 != senha2) || (senha1 == '') || (senha1 == '')){
                        alert("Senhas nao conferem");
                        form.usersenha.focus();
                        return false;
                    }
                }


                $(document).ready(function () {
                    $('#send').click(function () {
                        var formID = document.getElementById("fmcadusuario");
                        var send = $("#send");

                        $(formID).submit(function(event){
                            if (formID.checkValidity()) {
                                send.attr('disabled', 'disabled');
                            }
                        });
                    })
                })



            </script>
