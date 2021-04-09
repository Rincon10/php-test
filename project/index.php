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
            <form id="form-lugar" action="" method="POST">
                <div ><h2>Insertar nuevo lugar</h2></div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Ciudad">Ciudad</label>
                    <input name="ciudad" type="text" class="form-control" id="ciudad" placeholder="ciudad">
                </div>
            <div class="form-group col-md-6">
                <label for="pais">Pais</label>
                <input name="pais" type="text" class="form-control" id="pais" placeholder="Pais">
            </div>
                <div class="form-group" >
                    <button id="insert" name="insertar" type="submit" class="btn btn-primary  btn-block">Insertar</button>
                </div>
                </div>
            
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
    // Icluyendo la base de datos y funciones
    require 'includes/config/database.php';
    require 'includes/functions/functions.php';
    require 'includes/functions/Lugar.php';


    /***************************Creando Conexion DB******************************** */
    // Creando conexion a la base de datos
    $db =  dataBaseConection();
    
    /*************************** Leemos la Informacion enviada por el formulario *****/ 
    readForms($db);
    ?>
    
</body>
</html>
