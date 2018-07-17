<?php
//include_once "class/class_gerasenha.php";

class gerasenha{
    //const constantes =
}

/**
 * @param $clicnpj
 */
function mostrasenha($clicnpj)
{
    $Meses = array( 561467131,
                    123412341,
                    112233445,
                    169814560,
                    465310023,
                    223311567,
                    643103685,
                    341067839,
                    711225673,
                    881606876,
                    993256052,
                    895631643);


    $data = date('m-Y');


    $x1 = substr($clicnpj, -14, 1);
    $x2 = substr($clicnpj, -13, 1);
    $x3 = substr($clicnpj, -12, 1);
    $x4 = substr($clicnpj, -11, 1);
    $x5 = substr($clicnpj, -10, 1);
    $x6 = substr($clicnpj, -9, 1);
    $x7 = substr($clicnpj, -8, 1);
    $x8 = substr($clicnpj, -7, 1);
    $x9 = substr($clicnpj, -6, 1);
    $x10 = substr($clicnpj, -5, 1);
    $x11 = substr($clicnpj, -4, 1);
    $x12 = substr($clicnpj, -3, 1);
    $x13 = substr($clicnpj, -2, 1);
    $x14 = substr($clicnpj, -1, 1);
    $mes = intval(substr($data, 0, 2));
    $mes1 = substr($data, 0, 1);
    $mes2 = substr($data, 1, 1);
    $ano1 = substr($data, 3, 1);
    $ano2 = substr($data, 4, 1);
    $ano3 = substr($data, 5, 1);
    $ano4 = substr($data, 6, 1);

    $soma = (($x1 * 5) + ($x2 * 1) + ($x3 * 8) + ($x4 * 2) + ($x5 * 3) + ($x6 * 4) + ($x7 * 9) + ($x8 * 6) + ($x9 * 7) +
            ($x10 * 1) + ($x11 * 2) + ($x12 * 3) + ($x13 * 4) + ($x14 * 5));

    $somaMA = ($mes1 * 5) + ($mes2 * 6) + ($ano1 * 9) + ($ano2 * 3) + ($ano3 * 7) + ($ano4 * 1);

    $parte1 = substr($Meses[$mes -1],0,4);
    $parte2 = substr($Meses[$mes -1],4,5);

    $R1 = ($parte1 + ($soma * $somaMA));
    $R2 = ($parte2 + ($soma * $somaMA));

    $res = substr($R1, 0,4).substr($R2,0,5);


    echo '<br>'.$soma;
    echo '<br>'.$somaMA;
    echo '<br>'.$parte1;
    echo '<br>'.$parte2;
    echo '<br>'.$R1;
    echo '<br>'.$R2;
    echo '<br>'.$res;
    echo '<br>'.$mes;
    echo '<br>'.$mes1, $mes2.'<br>'.$ano1, $ano2, $ano3, $ano4;

}

mostrasenha('03206081000179');

?>