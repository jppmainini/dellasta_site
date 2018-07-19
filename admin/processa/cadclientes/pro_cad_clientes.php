<?php
session_start();
include_once ('../../seguranca.php');
include_once ('../../conectadb.php');
$clicodigo 				= $_POST["clicodigo"];
$clipessoa              = $_POST["clipessoa"];
$clirazao               = $_POST["clirazao"];
$clifantasia            = $_POST["clifantasia"];
$clicpfcnpj             = $_POST["clicpfcnpj"];
$clirgie                = $_POST["clirgie"];
$clicep                 = $_POST["clicep"];
$cliendereco            = $_POST["cliendereco"];
$clinumero              = $_POST["clinumero"];
$clicomplemento         = $_POST["clicomplemento"];
$clibairro              = $_POST["clibairro"];
$clicidade              = $_POST["clicidade"];
$cliestado              = $_POST["cliestado"];
$climunicipio           = $_POST["climunicipio"];
$cliemail               = $_POST["cliemail"];
$clifone1               = $_POST["clifone1"];
$clifone2               = $_POST["clifone2"];
$clifone3               = $_POST["clifone3"];
$observacao             = $_POST["observacao"];



$query = mysqli_query($conectar, "insert into clientes(clicodigo, clipessoa, clirazao, clifantasia, clicpfcnpj, clirgie, 
                                            clicep, cliendereco, clinumero, clicomplemento, clibairro, clicidade, cliestado, 
                                            climunicipio, cliemail, clifone1, clifone2, clifone3, observacao, clidatainclusao) 
                                         values ('$clicodigo','$clipessoa','$clirazao','$clifantasia','$clicpfcnpj','$clirgie',
                                             '$clicep','$cliendereco','$clinumero','$clicomplemento','$clibairro','$clicidade',
                                             '$cliestado','$climunicipio','$cliemail','$clifone1','$clifone2','$clifone3','$observacao', NOW())")
                                         or die(mysqli_error($conectar));


if (mysqli_affected_rows($conectar) != 0){
    $_SESSION['cadclisucess']="<div class=\"alert alert-warning alert-dismissible fade show text-center\" role=\"alert\" id=\"success-alert\">
                                        Cliente, <strong>$clirazao - </strong> Cadastrado com Sucesso.
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>";
    header("Location: ../../admin.php?link=31");
}
?>