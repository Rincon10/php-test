<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Lab06</title>
    </head>
    
    <body>
        <div style="margin: 10px;">
            <form id="form-persona" action="" method="POST">
                <div ><h2>Insertar nueva persona</h2></div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="cedula">Cedula </label>
                <input name="cc" type="number" class="form-control" id="cc" placeholder="CC" >
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombres">Nombres</label>
                    <input name="nombres" type="text" class="form-control" id="nombres" placeholder="Nombres">
                </div>
            <div class="form-group col-md-6">
                <label for="apellidos">Apellidos</label>
                <input name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Apellidos">
            </div>
                </div>
            
                </div>
                <div class="form-group">
            <button id="insert" name="insertar" type="submit" class="btn btn-primary  btn-block">Insertar</button>
                </div>
                </form>
            
                <form id="form-drop" action="" method="POST">
                <div ><h2>Eliminar una tabla </h2></div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nombreTabla">Tabla </label>
                <input name="nombreTabla" type="text" class="form-control" id="nombreTabla" placeholder="nombre" >
            </div>
                <div class="form-group">
            <button id="drop" name="drop" type="submit" class="btn btn-primary  btn-block">Borrar</button>
                </div>

                <div ><h2>Insertar codigo </h2></div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="codigo">codigo </label>
                <br>
                <textarea name="codigo" type="text" class="form-control" id="codigo" ></textarea>
            </div>
                <div class="form-group">
                    <button id="codeB" name="codeB" type="submit" class="btn btn-primary  btn-block">Correr</button>
                </div>
                </form>
                
        
        </div>
    <?php
    /******************************Arreglos*************************************** */
    $personas = array();

    /******************************Importando************************************** */
    /**
     * funcion que importara las clases y funciones necesarias de functions
     */
    function myAutoload($class) {    
        require __DIR__.'/includes/functions/'.$class.'.php';
    }


    // Importando con AutoLoad 
    spl_autoload_register('myAutoload');
    // Icluyendo la base de datos
    require 'includes/config/database.php';
    require 'includes/functions/functions.php';


    /***************************Creando Conexion DB******************************** */
    // Creando conexion a la base de datos
    $db =  dataBaseConection();
    
    /*************************** Leemos la Informacion enviada por el formulario *****/ 
    readForms($db);
    ?>
    
</body>
</html>
