<?php
    if (
        $_SERVER['REQUEST_METHOD'] == 'POST' 
        && isset($_GET['name'])
        && isset($_GET['type1'])
    ) {
        $name = $_GET['name'];
        $type1 = $_GET['type1'];
        $type2 = isset($_GET['type2']) ? $_GET['type2'] : "";

        $type = $type2 == "" ? $type1 : "$type1/$type2";
        
        header("HTTP/1.1 201 El pokemon: $name del tipo $type se registro con exito");
    }else{
        header("HTTP/1.1 409 Ocurrio un error al registrar el pokemon");
    }
?>