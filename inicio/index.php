<?php
    $teste = 123;
    echo $teste;
    for($i = 0; $i < 10; $i++){
        echo $i;
    }
    if($i == $teste){
        echo "acerto mizerave!";
    }
    echo "<pre>";
    echo "_get\n";
    print_r($_GET);
    echo "_POST\n"; print_r($_POST);
    echo "_FILES\n"; print_r($_FILES);
    echo "_COOCKIE\n";print_r($_COOKIE);
    echo "_SERVER\n"; print_r($_SERVER);
    echo "_session\n"; print_r($_SESSION);
    echo "_env\n"; print_r($_ENV);
    echo "globals\n"; print_r($GLOBALS);
    echo "</pre>";
    ?>