<?php
    $resultado = mysqli_query($conectar, 'select * from empresas order by empcodigo');
    $linhas = mysqli_num_rows($resultado)
?>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                <h1 class="h2">Cadastro de Empresas</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn mr-2">
                        <a href="admin.php?link=21"><button class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Novo</button></a>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>
            <p>
                <?php
                    if(isset($_SESSION['cadempresasucess'])){//isset mandar imprimir
                        echo $_SESSION['cadempresasucess']; //echo imprimir
                        unset($_SESSION['cadempresasucess']); //unset destoi a variavel
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
                        <th>Razão:</th>
                        <th>Fantasia:</th>
                        <th>CNPJ:</th>
                        <th>Inscricão Estadual:</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php while ($linhas = mysqli_fetch_array($resultado)){?>
                            <tr>
                                <td><input type="checkbox" class="checkbox m-md-1 checkboxid" name="empcodigo[]" value="<?php echo $linhas['empcodigo']?>" ></td>
                                <td><?php echo $linhas['empcodigo']?></td>
                                <td><?php echo $linhas['emprazao']?></td>
                                <td><?php echo $linhas['empfantasia']?></td>
                                <td><?php echo $linhas['empcnpj']?></td>
                                <td><?php echo $linhas['empie']?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#gridSystemModal<?php echo $linhas['empcodigo']?>" title="Visualizar" ><i class="far fa-eye"></i></button>
                                    <a href='admin.php?link=22&id=<?php echo $linhas['empcodigo'];?>'><button type="button" class="btn btn-warning btn-sm text-white" title="Editar" ><i class="far fa-edit"></i></button></a>
                                    <button type="button" class="btn btn-danger btn-sm text-white" title="Excluir" onclick="deleteempresa(<?php echo $linhas['empcodigo'];?>)" ><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <!-- INICIO DO MODAL -->
                                <div id="gridSystemModal<?php echo $linhas['empcodigo']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                                    <div class="modal-lg modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="gridModalLabel">Dados da Empresa</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid bd-example-row ">
                                                    <div class="row">
                                                        <div class="col-md-12"><strong>Código: </strong><?php echo $linhas['empcodigo']?></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-9"><strong>Razão Social: </strong> <?php echo $linhas['emprazao']?></div>
                                                        <div class="col-md-3"><strong>Nome Fantasia: </strong> <?php echo $linhas['empfantasia']?></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-9"><strong>CNPJ: </strong> <?php echo $linhas['empcnpj']?></div>
                                                        <div class="col-md-3"><strong>Insc. Estadual: </strong> <?php echo $linhas['empie']?></div>
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
            window.location.href = "processa/cadempresa/pro_exclui_empresa.php?del_id="+delid;
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
