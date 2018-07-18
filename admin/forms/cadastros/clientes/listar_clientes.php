<?php
    $resultado = mysqli_query($conectar, 'select * from clientes order by clicodigo');
    $linhas = mysqli_num_rows($resultado)
?>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                <h1 class="h2">Lista de Clientes</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn mr-2">
                        <a href="admin.php?link=32"><button class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Novo</button></a>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>
            <p>
                <?php
                    if(isset($_SESSION['cadclisucess'])){//isset mandar imprimir
                        echo $_SESSION['cadclisucess']; //echo imprimir
                        unset($_SESSION['cadclisucess']); //unset destoi a variavel
                    }
                ?>
            </p>

            <!--<h2>Section title</h2>-->
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead>
                    <tr>
                        <!--<th><input type="checkbox" class="m-md-1" name="checkboxall" id="checkboxall"></th>-->
                        <th>#</th>
                        <th>Codigo</th>
                        <th>Nome/Razão:</th>
                        <th>Apelido/Fantasia:</th>
                        <th>CPF/CNPJ:</th>
                        <th>Email:</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php while ($linhas = mysqli_fetch_array($resultado)){?>
                            <tr>
                                <td><input type="checkbox" class="checkbox m-md-1 checkboxid" name="empcodigo[]" value="<?php echo $linhas['clicodigo']?>" ></td>
                                <td><?php echo $linhas['clicodigo']?></td>
                                <td><?php echo $linhas['clirazao']?></td>
                                <td><?php echo $linhas['clifantasia']?></td>
                                <td><?php echo $linhas['clicpfcnpj']?></td>
                                <td><?php echo $linhas['cliemail']?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#gridSystemModal<?php echo $linhas['clicodigo']?>" title="Visualizar" ><i class="far fa-eye"></i></button>
                                    <a href='admin.php?link=33&id=<?php echo $linhas['clicodigo'];?>'><button type="button" class="btn btn-warning btn-sm text-white" title="Editar" ><i class="far fa-edit"></i></button></a>
                                    <button type="button" class="btn btn-danger btn-sm text-white" title="Excluir" onclick="deletecliente(<?php echo $linhas['clicodigo'];?>)" ><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <!-- INICIO DO MODAL -->
                                <div id="gridSystemModal<?php echo $linhas['clicodigo']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                                    <div class="modal-lg modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="gridModalLabel">Dados do Cliente</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid bd-example-row ">
                                                    <div class="row">
                                                        <div class="col-md-12"><strong>Código: </strong><?php echo $linhas['clicodigo']?></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-9"><strong>Nome/Razão: </strong> <?php echo $linhas['clirazao']?></div>
                                                        <div class="col-md-3"><strong>Nome Fantasia: </strong> <?php echo $linhas['clipessoa']?></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-9"><strong>CPF/CNPJ: </strong> <?php echo $linhas['clicpfcnpj']?></div>
                                                        <div class="col-md-3"><strong>Email: </strong> <?php echo $linhas['cliemail']?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- FIM MODAL -->
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>





<script language="JavaScript">
    /*function deleteuser(delid) {
        if (confirm("Deseja realmente excluir o usuario ?")){
            window.location.href="processa/pro_excluir_usuario.php?del_id="+delid;
            return true;
        }
    }*/
    function deleteempresa(delid) {
        var resposta = confirm("Deseja realmente excluir o essa empresa ?");
        if (resposta == true){
            window.location.href = "processa/pro_excluir_empresa.php?del_id="+delid;
        }
    }
    // CHECKBOX NA GRID
    $(document).ready(function () {
        $('#checkboxall').click(function () {
            if ($(this).is(":checked"))
                $('.checkboxid').prop('checked', true);
            else
                $('.checkboxid').prop('checked', false);
        })
    })


</script>
