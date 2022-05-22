<?php
    //try - tente
    //catch - pegar
    //finally - finalmente
    try{
        echo "Try";
        // $sql = "Select * From clientes";
        // mysql_query($sql);
        
        if ( !file_exists('naoexiste.php')){
            throw new Error('Retorna erro');
            throw new Exception('Retorna exception');
        }


    } catch (Error $e){
        echo "<br/>Catch $e";
    } catch (Exception $e){
        echo "<br/><br/>".$e;
    } finally{
         echo "<br/>Finally";
    }


?>