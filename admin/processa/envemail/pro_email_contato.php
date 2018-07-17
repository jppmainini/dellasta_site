<?php

$assunto = 'Mensagem de Contato';
$corpo = "
    Assunto:    $assunto.
    Nome:"       .$_POST['nome']."
    Email:"      .$_POST['email']."
    Mensagem"    .$_POST['mensagem']."
";
mail('jeferson@dellasta.com.br', $assunto, $corpo, 'From: jeferson@dellasta.com.br');
?>