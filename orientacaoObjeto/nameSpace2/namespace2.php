<?php

    require('lib1/Lib1.php'); 
    require('lib2/Lib2.php');
    
    use A\Cliente as C1;
    use B\Cliente as C2;


    $c = new C1();
    print_r($c);
    echo $c->__get('nome');
    
    $b = new C2();
    print_r($b);
    echo "<br/>".$b->__get('nome');
?>