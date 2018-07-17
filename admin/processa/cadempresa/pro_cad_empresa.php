<?php
session_start();
include_once ('../../seguranca.php');
include_once ('../../conectadb.php');
$emprazao         = $_POST["emprazao"];
$empfatasia       = $_POST["empfantasia"];
$empcnpj          = $_POST["empcnpj"];
$empie            = $_POST["empie"];
$empcep           = $_POST["cep"];
$empendereco      = $_POST["rua"];
$empnumero        = $_POST["empnumero"];
$empcomplemento   = $_POST["empcomplemento"];
$empbairro        = $_POST["bairro"];
$empcidade        = $_POST["cidade"];
$empuf            = $_POST["uf"];
$empcodmun        = $_POST["ibge"];
$empemail         = $_POST["empemail"];
$empfone1         = $_POST["empfone1"];
$empfone2         = $_POST["empfone2"];
$empfone3         = $_POST["empfone3"];
$empobservacao         = $_POST["empobservacao"];



$query = mysqli_query($conectar, "insert into empresas(emprazao, empfantasia, empcnpj, empie, empcep, empendereco, empnumero, empcomplemento, empbairro, empcidade, empestado, empcodmunicipio, empemail, empfone1, empfone2, empfone3, observacao,empdatainclusao) values ('$emprazao', '$empfatasia', '$empcnpj', '$empie', '$empcep', '$empendereco','$empnumero','$empcomplemento','$empbairro','$empcidade','$empuf','$empcodmun','$empemail','$empfone1','$empfone2','$empfone3','$empobservacao', NOW())") or die(mysqli_error($conectar));
if (mysqli_affected_rows($conectar) != 0){
    $_SESSION['cadempresasucess']="<div class=\"alert alert-warning alert-dismissible fade show text-center\" role=\"alert\" id=\"success-alert\">
                                        Empresa, <strong>$emprazao - </strong> Cadastrado com Sucesso.
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>";
    header("Location: ../../admin.php?link=20");
}
?>