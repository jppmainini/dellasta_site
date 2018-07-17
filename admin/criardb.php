<?php
include_once ('conectadb.php');

$botao = $_GET['id'];
    if($botao == 'create'){
        //  CADASTRO DE USUARIOS
        $result = mysqli_query($conectar, "show tables like 'usuarios'") or die(mysqli_error($conectar));
        $tbexist = mysqli_num_rows($result);
        if ($tbexist != 1) {
            $tbusuarios = 'create table usuarios(
                            userid int not null auto_increment primary key,
                            usernome varchar(220),
                            useremail varchar(220),
                            userusuario varchar(50) not null,
                            usersenha varchar(50) not null,
                            nivel_acesso_id integer,
                            userdatainclusao datetime,
                            userdataalteracao datetime)';
            mysqli_query($conectar, $tbusuarios) or die(mysqli_error($conectar));
            $createadmin = mysqli_query($conectar, "insert into usuarios( userid, usernome, useremail, userusuario, usersenha, nivel_acesso_id, userdatainclusao) values (1, 'Dellasta Informática', 'dellasta@dellasta.com.br', 'dellasta', '9419', '1', NOW())") or die(mysqli_error($conectar));

        }

        //  CADASTRO DE EMPRESAS
        $result = mysqli_query($conectar, "show tables like 'empresas'") or die(mysqli_error($conectar));
        $tbexist = mysqli_num_rows($result);
        if ($tbexist != 1) {
            $tbempresas = 'create table empresas(
                                empcodigo int auto_increment primary key,
                                emprazao varchar(220),
                                empfantasia varchar(220),
                                empcnpj varchar(18),
                                empie varchar(15),
                                empcep varchar(10),
                                empendereco varchar(220),
                                empnumero varchar(5),
                                empcomplemento varchar(50),
                                empbairro varchar(50),
                                empcidade varchar(150),
                                empestado varchar(2),
                                empcodmunicipio varchar(220),
                                empemail varchar(330),
                                empfone1 varchar(14),
                                empfone2 varchar(14),
                                empfone3 varchar(14),
                                observacao text,
                                empdatainclusao datetime,
                                empdataalteracao datetime
                          )';
            mysqli_query($conectar, $tbempresas) or die(mysqli_error($conectar));

        }

        //  CADASTRO DE CLIENTES
        $result = mysqli_query($conectar, "show tables like 'clientes'") or die(mysqli_error($conectar));
        $tbexist = mysqli_num_rows($result);
        if ($tbexist != 1) {
            $tbclientes = 'create table clientes(
                                clicodigo int auto_increment primary key,
                                clipessoa varchar(1),
                                clirazao varchar(220),
                                clifantasia varchar(220),
                                clicpfcnpj varchar(18),
                                clirgie varchar(15),
                                clicep varchar(10),
                                cliendereco varchar(220),
                                clinumero varchar(5),
                                clicomplemento varchar(50),
                                clibairro varchar(50),
                                clicidade varchar(150),
                                cliestado varchar(2),
                                climunicipio varchar(220),
                                cliemail varchar(330),
                                clifone1 varchar(14),
                                clifone2 varchar(14),
                                clifone3 varchar(14),
                                observacao text,
                                clidatainclusao datetime,
                                clidataalteracao datetime
                          )';
            mysqli_query($conectar, $tbclientes) or die(mysqli_error($conectar));

        }
    //  EMP USUARIOS
        $result = mysqli_query($conectar, "show tables like 'empusuarios'") or die(mysqli_error($conectar));
        $tbexist = mysqli_num_rows($result);
        if ($tbexist != 1) {
            $tbempusuarios = 'create table empusuarios(
                            empuserodigo int auto_increment primary key,
                            empcodigo integer,
                            userid integer
                            )';
            mysqli_query($conectar, $tbempusuarios) or die(mysqli_error($conectar));

        }

    }