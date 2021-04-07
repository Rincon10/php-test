<?php
/***
 * funcion que se encarga de leer los formularios y decide de donde toma la informacion
 * @param db PDO, conexion a la base de datos
 */
function readForms( PDO $db ) {
    if( $_POST['nombres'] <> "" ) {
        $persona = readInputPersona();
        insertPerson( $persona, $db);
    }
    else if ( $_POST['codigo']<> "" ) {
        $code = $_POST['codigo'];        
        createTeable($code, $db);
    }
    else if ( $_POST['nombreTabla'] <> "" ) {
        $nombre = $_POST['nombreTabla'];
        dropTable($nombre, $db);
    }
}

/**
 * funcion que lee el formulario de insercion de persona y lo convierte en objeto
 * @return Persona, persona con la informacion ingresada
 */
function readInputPersona() {
    $cc = $_POST['cc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    $_POST['cc'] = "";
    $_POST['nombres'] = "";
    $_POST['apellidos'] = "";
    
    return new Persona($cc, $nombres, $apellidos);
}
