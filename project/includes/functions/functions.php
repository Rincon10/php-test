<?php

function readForms( PDO $db ) {
    echo "entre";
    echo $db;
    echo "lei la db";
    echo $_POST['ciudad'];
    echo "pase el post";
    if( isset($_POST['ciudad'] ) && $_POST['ciudad'] <> '') {
        $ciudad = readInputLugar();
        insertLugar( $ciudad, $db);
    }
    else if (  isset($_POST['codigo']) && $_POST['codigo'] <> '' ) {
        $code = $_POST['codigo'];        
        createTable($code, $db);
    }
    else if ( isset($_POST['nombreTabla'] ) && $_POST['nombreTabla'] <> '' ) {
        $nombre = $_POST['nombreTabla'];
        dropTable($nombre, $db);
    }
}


function readInputLugar() {
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];

    $_POST['ciudad'] = "";
    $_POST['pais'] = "";
    
    return new Lugar($ciudad, $pais);
}
