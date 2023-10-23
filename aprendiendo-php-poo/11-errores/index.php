<?php

/*
* Una excepción es un error que genera nuestro código
*/

// throw new Exception("Hay un error");

// Capturar excepciones en codico susceptible a errores
try{
    if(isset($_GET['id'])){
        echo "<h1>El parámetro es : {$_GET['id']}</h1>";
    }else{
        throw new Exception("faltan parametros por la URL");
    }
}catch(Exceptino $e){
    echo "Ha ocurrido un error " . $e->getMessage();
}finally{
    echo "Todo correcto";
}
