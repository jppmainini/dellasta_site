<div class="border-bottom">
    <h1 class="h2">Cadastro de Empresa</h1>
</div>
<br>
<form class="needs-validation" name="fmcadempresas" method="post" action="processa/cadempresa/pro_cad_empresa.php" novalidate>
    <!-- INICIO BAR CADASTRO -->
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Bàsico</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
        </div>
    </nav>
    <div class="tab-content " id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <fieldset  disabled>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="disabledTextInput">Código</label>
                        <input type="text" class="form-control form-control-sm" id="disabledTextInput" name="empcodigo">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Data de Inclusão</label>
                        <input type="text" class="form-control form-control-sm" name="empdatainclusao">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Data Ultima Alteração</label>
                        <input type="text" class="form-control form-control-sm" name="empdataauteracao">
                    </div>
                </div>
            </fieldset>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Razão Social</label>
                    <input type="text" class="form-control form-control-sm" name="emprazao" id="validationCustom01" placeholder="Razão Social" required>
                    <div class="invalid-feedback">
                        Preencha o campo!!!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Nome Fantasia</label>
                    <input type="text" class="form-control form-control-sm" name="empfantasia" id="validationCustom02" placeholder="Nome Fantasia" required>
                    <div class="invalid-feedback">
                        Preencha o Campo !!!
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationCustom03">CNPJ</label>
                    <input type="text" class="form-control form-control-sm" name="empcnpj" id="validationCustom03" onKeyPress="MascaraCNPJ(fmcadempresas.empcnpj);" onchange="ValidarCNPJ(fmcadempresas.empcnpj);" maxlength="18" placeholder="CNPJ" required>
                    <div class="invalid-feedback">
                        Preencha o Campo !!!
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationCustom04">Inscrição Estadual</label>
                    <input type="text" class="form-control form-control-sm" name="empie" id="validationCustom04" onkeypress="MascaraIE(fmcadempresas.empie)" maxlength="15" placeholder="Inscição Estadual" required>
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!
                    </div>
                </div>
            </div>
            <!-- INICIO ENDERECO -->
            <div class="form-row">
                <div class="col-md-2 mb-3">
                    <label for="cep">Cep</label>
                    <input class="form-control form-control-sm" type="text" name="cep"  id="cep" size="10" maxlength="10" onkeypress="MascaraCep(fmcadempresas.cep)" onblur="pesquisacep(this.value);" placeholder="Cep" />
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="rua">Endereço</label>
                    <input name="rua" id="rua" type="text" class="form-control form-control-sm"  size="60" placeholder="Endereço" >
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="validationCustom08">Numero</label>
                    <input type="text" class="form-control form-control-sm" name="empnumero" id="validationCustom08" placeholder="Numero" >
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom09">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="empcomplemento" id="validationCustom09" placeholder="Complemento" >
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="form-row">
                <div class="col-md-2 mb-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="Bairro" >
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="Cidade" >
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="uf">UF</label>
                    <select class="custom-select form-control form-control-sm" id="uf" name="uf" required>
                        <option value="SP" selected>SP</option>
                        <option value="RJ">RJ</option>
                        <option value="GO">GO</option>
                        <option value="MG">MG</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="ibge">Cod. Munic.</label>
                    <input type="text" class="form-control form-control-sm" name="ibge" id="ibge" placeholder="Cod. Municipal" >
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label for="validationCustom14">eMail</label>
                    <input type="text" class="form-control form-control-sm" name="empemail" id="validationCustom14" placeholder="eMail" >
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
            </div>
            <!-- INICIO CONTATO -->
            <fieldset>
                <legend>Telefones</legend>
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom15">Telefone 1</label>
                        <input type="text" class="form-control form-control-sm" name="empfone1" id="validationCustom15" onblur="MascaraTelefone(fmcadempresas.empfone1)" size="15" maxlength="15" placeholder="Telefone 1" autocomplete="on" >
                        <div class="invalid-feedback">
                            Preencha esse Campo !!!!
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom16">Telefone 2</label>
                        <input type="text" class="form-control form-control-sm" name="empfone2" id="validationCustom16" onkeypress="MascaraTelefone(fmcadempresas.empfone2)" maxlength="15" placeholder="Telefone 1" autocomplete="off">
                        <div class="invalid-feedback">
                            Preencha esse Campo !!!!
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom17">Telefone 3</label>
                        <input type="text" class="form-control form-control-sm" name="empfone3" id="validationCustom17" onkeypress="MascaraTelefone(fmcadempresas.empfone3)" maxlength="15" placeholder="Telefone 1" autocomplete="off">
                        <div class="invalid-feedback">
                            Preencha esse Campo !!!!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom18">Observação</label>
                        <textarea class="form-control form-control-sm" name="empobservacao"></textarea>
                    </div>
            </fieldset>
        </div>


        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            ++++++
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            ...
        </div>
    </div>

    <!-- -->

    <div class="btn">
        <button class="btn btn-primary" name="btn-submit" type="submit" onclick="return confirmasenha()">Gravar</button>
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

</script>

