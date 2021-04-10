<?php

function readForms( PDO $db ) {
    echo "entree";
    if( isset($_POST['ciudad'] ) ) {
        $ciudad = readInputLugar();
        insertLugar( $ciudad, $db);
    }
    else if ( isset($_POST['codigo']) ) {
        $code = $_POST['codigo'];        
        createTable($code, $db);
    }
    else if ( isset($_POST['nombreTabla'] ) ) {
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
