<?php
/**
 * Created by PhpStorm.
 * User: Jeferson
 * Date: 25/06/2018
 * Time: 15:26
 */

class gerasenha
{
    function mostrasenha($clicnpj){
        $result = substr($clicnpj, -3, 1); // retorna "d";
        echo $result;
    }

}