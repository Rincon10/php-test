<?php
//Para realizar inserciones 
/*
PDO::PARAM_STR se utiliza para cadenas.
PDO::PARAM_INT se utiliza para enteros.
PDO::PARAM_BOOL solo permite valores booleanos (true/false).
PDO::PARAM_NULL solo permite el tipo de datos NULL */

/* DATABASE CONFIGURATION Postgresql*/

define('motor', 'pgsql');
define('dbname', 'leonardodb');
define('dbuser', 'leonardo');
define('dbpasswd', 'leonardo');
define('pc', '10.2.77.166');
define('port', '5432');

/* DATABASE CONFIGURATION MySQL*/
/* define('motor', 'mysql');
define('dbname', 'ivanDB');
define('dbuser', 'ivan');
define('dbpasswd', 'admin');
define('pc', '10.2.77.167');
define('port', '3306');
 */

/**
 *Funcion que realiza la conexion a la base de datos segun corresponda 
 */
function dataBaseConection( ) {
    try{
        $db = new PDO(motor.":host=".pc."; dbname=".dbname."; port=".port ,dbuser, dbpasswd);
        return $db;
    }
    catch( PDOException $pdoException ){
        echo "<br>";
        echo "La conexion fallo: ". $pdoException->getMessage();
    }
}

/**
 * Funcion que realiza una consulta a la tabla ingresada
 * @param tableName string, nombre de la tabla de datos a consultar
 * @param db PDO, conexion a la base de datos
 * @return array, array con listas asociativas de la consulta realizada
 */
function query( string $tableName, PDO $db ){
    try{
        // Consulta a realizar
        $query = "SELECT * FROM ".$tableName;     
        // Preparamos la consulta
        $stmt = $db->prepare($query);
        // Ejecutamos
        $stmt->execute();
        //return $stmt->fetchAll( PDO::FETCH_OBJ);
        return $stmt->fetchAll( PDO::FETCH_ASSOC);

    }
    catch( Exception $exception ){
        echo "<br>";
        echo "Error inesperado al consultar: ". $exception->getMessage();
    }
}

/**
 * Funcion que realiza una consulta a la tabla ingresada
 * @param lugar Lugar, lugar a insertar a la base de datos
 * @param db PDO, conexion a la base de datos
 */
function insertLugar( Lugar $lugar, PDO $db ) {
    $string = $lugar->toStringDB();
    
    try{
        $insert = "INSERT INTO Lugar".$string[0]."values".$string[1];

        // Preparamos la insercion
        $stmt = $db->prepare($insert);
    
        // Casteamos los valores
        $stmt->bindParam('ciudad',$lugar->get, PDO::PARAM_STR, 40);
        $stmt->bindParam('pais',$lugar->get, PDO::PARAM_STR, 40);

        // Ejecutamos
        $stmt->execute();
    }
    catch( Exception $exception ){
        echo "<br>";
        echo "Error al insertar: ". $exception->getMessage();
    }
}


/**
 * Funcion que borra una tabla
 * @param tableName string, nombre de la tabla de datos a eliminar
 * @param db PDO, conexion a la base de datos
 */
function dropTable( string $name, PDO $db ) {
    $drop = "DROP TABLE ".$name;
    try{
        // Preparamos la eliminacion
        $stmt = $db->prepare($drop);
    
        // Ejecutamos
        $stmt->execute();
    }

    catch( Exception $exception ){
        echo "<br>";
        echo "Error al eliminar la tabla".$name.": ".$exception->getMessage();
    }
}

function createTable( string $code, PDO $db ){
    try{
        // Preparamos la creacion de la tabla
        $stmt = $db->prepare($code);
    
        // Ejecutamos
        $stmt->execute();
    }

    catch( Exception $exception ){
        echo "<br>";
        echo "Error al crear la tabla".": ".$exception->getMessage();
    }
}