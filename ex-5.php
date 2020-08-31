<?php

$nome = "Mariana";
function teste() {

    global $nome;
    echo $nome;

}

function teste2() {

    $nome = "MARIANA";
    echo $nome. "new test";

}

teste ();

?>