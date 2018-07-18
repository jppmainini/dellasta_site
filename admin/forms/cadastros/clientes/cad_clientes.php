<div class="border-bottom">
    <h1 class="h2">Cadastro de Clientes</h1>
</div>
<br>
<form class="needs-validation" name="fmcadclientes" method="post" action="processa/cadclientes/pro_cad_clientes.php" novalidate>
    <!-- INICIO BAR CADASTRO -->
    <nav> <!-- ABAS PAGECONTROL -->
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Bàsico</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
        </div>
    </nav><!-- FIM ABAS -->
    <div class="tab-content " id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <fieldset  disabled>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="id_clicodigo">Código</label>
                        <input type="text" class="form-control form-control-sm" id="id_clicodigo" name="clicodigo">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Data de Inclusão</label>
                        <input type="text" class="form-control form-control-sm" name="clidatainclusao">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Data Ultima Alteração</label>
                        <input type="text" class="form-control form-control-sm" name="clidataauteracao">
                    </div>
                </div>
            </fieldset>

            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <label for="id_pessoa">Pessoa</label>
                    <select class="custom-select form-control form-control-sm" id="id_pessoa" name="clipessoa" required>
                        <option value="F" selected>Fisica</option>
                        <option value="J">Juridica</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="id_clirazao">Nome/Razão</label>
                    <input type="text" class="form-control form-control-sm" name="clirazao" id="id_clirazao" placeholder="Nome/Razão" required>
                    <div class="invalid-feedback">
                        Preencha o campo!!!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="id_clifantasia">Nome Fantasia</label>
                    <input type="text" class="form-control form-control-sm" name="clifantasia" id="id_clifantasia" placeholder="Nome Fantasia" required>
                    <div class="invalid-feedback">
                        Preencha o Campo !!!
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="id_clicpfcnpj">CPF/CNPJ</label>
                    <input type="text" class="form-control form-control-sm" name="clicpfcnpj" id="id_clicpfcnpj" onKeyPress="MascaraCNPJ(fmcadclientes.clicpfcnpj);" onchange="ValidarCNPJ(fmcadclientes.clicpfcnpj);" maxlength="18" placeholder="CNPJ" required>
                    <div class="invalid-feedback">
                        Preencha o Campo !!!
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="id_clirgie">Inscrição Estadual</label>
                    <input type="text" class="form-control form-control-sm" name="clirgie" id="id_clirgie" onkeypress="MascaraIE(fmcadclientes.clirgie)" maxlength="15" placeholder="Inscição Estadual" required>
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!
                    </div>
                </div>
            </div>
            <!-- INICIO ENDERECO -->
            <div class="form-row">
                <div class="col-md-2 mb-3">
                    <label for="cep">Cep</label>
                    <input class="form-control form-control-sm" type="text" name="cep"  id="cep" size="10" maxlength="10" onkeypress="MascaraCep(fmcadclientes.cep)" onblur="pesquisacep(this.value)"placeholder="Cep" />
                    <input class="form-control form-control-sm" type="text" name="cep"  id="cep" size="10" maxlength="10" onkeypress="MascaraCep(fmcadclientes.cep)" onblur="pesquisacep(this.value);"placeholder="Cep" />
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
                    <label for="id_clinumero">Numero</label>
                    <input type="text" class="form-control form-control-sm" name="clinumero" id="id_clinumero" placeholder="Numero" >
                    <div class="invalid-feedback">
                        Preencha esse Campo !!!!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="id_clicomplemento">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="clicomplemento" id="id_clicomplemento" placeholder="Complemento" >
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
                    <label for="id_cliestado">UF</label>
                    <select class="custom-select form-control form-control-sm" id="id_cliestado" name="uf" required>
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
                    <label for="id_cliemail">eMail</label>
                    <input type="text" class="form-control form-control-sm" name="cliemail" id="id_cliemail" placeholder="Email" >
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
                        <label for="id_clifone1">Telefone 1</label>
                        <input type="text" class="form-control form-control-sm" name="clifone1" id="id_clifone1" onblur="MascaraTelefone(fmcadclientes.clifone1)" size="15" maxlength="15" placeholder="Telefone 1" autocomplete="on" >
                        <div class="invalid-feedback">
                            Preencha esse Campo !!!!
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="id_clifone2">Telefone 2</label>
                        <input type="text" class="form-control form-control-sm" name="clifone2" id="id_clifone2" onkeypress="MascaraTelefone(fmcadclientes.clifone2)" maxlength="15" placeholder="Telefone 1" autocomplete="off">
                        <div class="invalid-feedback">
                            Preencha esse Campo !!!!
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="id_clifone3">Telefone 3</label>
                        <input type="text" class="form-control form-control-sm" name="clifone3" id="id_clifone3" onkeypress="MascaraTelefone(fmcadclientes.clifone3)" maxlength="15" placeholder="Telefone 1" autocomplete="off">
                        <div class="invalid-feedback">
                            Preencha esse Campo !!!!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="id_observacao">Observação</label>
                        <textarea class="form-control form-control-sm" name="observacao" id="id_observacao"></textarea>
                    </div>
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
        <button class="btn btn-primary" name="btn-submit" type="submit">Gravar</button>
        <button class="btn btn-danger" type="button" onclick="window.location.href='admin.php?link=31'">Cancelar</button>
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