<?php
function validaLogin(){
    $retorno = isset($_SESSION['login']);
    $retorno = !empty($_SESSION['login']);

    return $retorno;
}