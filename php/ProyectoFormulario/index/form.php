<?php 

    spl_autoload_register(function ($class) {
        $classPath = realpath("../Users/");
        $file = str_replace('\\','/', $class);
        $include = "$classPath/${file}.php";
        require($include);
    });         


    $nombre = "";
    $apellidos = "";
    $sexo = "";
    $fecha = "";
    $calle = "";
    $codigoPostal = "";
    $ciudad = "";
    $pais = "";
    $email = "";
    $usuario = "";
    $contraseña = "";

    $config = Users\GestorUsuarios::singleton();
    $errores = [];

    $sysdate = new DateTime('now');
    $sysdate->format('m-d-Y');

    //Ver si el usuario envia la información
    /*function mistake($var){
        if (isset($errores["$var"])) {
            echo '<div class="error">';
            echo '<p>'.$errores["var"].'</p>';
            echo '</div>';
        }
    }*/
    if (isset($_POST["enviar"])) {
        //Controlar errores

        //nombre
        if (!empty($_POST["nombre"])) {
            $nombre = Users\Validar::cleanData($_POST["nombre"]);
        } else{
            $errores["nombre"] = "El nombre no puede estar vacio";
        }
        //apellidos
        if (!empty($_POST["apellidos"])) {
            $nombre = Users\Validar::cleanData($_POST["apellidos"]);
        } else{
            $errores["apellidos"] = "El apellido no puede estar vacio";
        }
        //sexo
        if (!empty($_POST["sexo"])) {
            $sexo = Users\Validar::cleanData($_POST["sexo"]);
        } else{
            $errores["sexo"] = "Marca tu sexo";
        }
        //fecha
        if (!empty($_POST["fecha"])) {
            $fecha = Users\Validar::cleanData($_POST["fecha"]);
        } else{
            $errores["fecha"] = "La fecha de nacimiento no puede estar vacia";
        }
        //calle
        if (!empty($_POST["calle"])) {
            $calle = Users\Validar::cleanData($_POST["calle"]);
        } else{
            $errores["calle"] = "La calle no puede estar vacia";
        }
        //Codigo Postal
        if (!empty($_POST["cp"])) {
            $codigoPostal = Users\Validar::cleanData($_POST["cp"]);
        } else{
            $errores["cp"] = "El Código Postal no puede estar vacio";
        }
        //ciudad
        if (!empty($_POST["ciudad"])) {
            $ciudad = Users\Validar::cleanData($_POST["ciudad"]);
        } else{
            $errores["ciudad"] = "La ciudad no puede estar vacia";
        }
        //pais
        if (!empty($_POST["pais"])) {
            $pais = Users\Validar::cleanData($_POST["pais"]);
        } else{
            $errores["pais"] = "El pais no puede estar vacio";
        }
        //correo electronico
        if (!empty($_POST["mail"])) {
            $email = Users\Validar::cleanData($_POST["mail"],Users\Validar::MAIL);
            if (!isset($email)) {
                $errores["mail"] = "El correo introducido no es un correo válido";
            }
        } else{
            $errores["mail"] = "El correo electronicop no puede estar vacio";
        }
        //usuario
        if (!empty($_POST["user"])) {
            $usuario = Users\Validar::cleanData($_POST["user"],Users\Validar::USER);
            if (!isset($usuario)) {
                $errores["user"] = "El usuario tiene que tener de 3 a 15 caracteres";
            }
        } else{
            $errores["user"] = "El nombre de usuario no puede estar vacio";
        }
        //contraseña
        if (!empty($_POST["pass"])) {
            $contraseña = Users\Validar::cleanData($_POST["pass"],Users\Validar::PASSWORD);
            if (!isset($contraseña)) {
                $errores["pass"] = "La contraseña tiene que tener como mínimo 8 caracteres y máximo 64";
            }
        } else{
            $errores["pass"] = "La contraseña no puede estar vacia";
        }

        // Recuento de errores
        if (count($errores) == 0) {
            // Guardar
            $user = new Users\User($nombre, $apellidos, $sexo, $fecha,$calle,$piso, $codigoPostal, $ciudad, $pais, $email,$usuario,$contraseña);

            $user->saveUsuarios($user);
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="cuerpo">
        <div class="titulo">
            <h1 class="tit">Registrarse</h1>
            <p>Crea tu cuenta de usuario</p>
        </div>
        <hr class="tit">
        <form action="" method="post">
            <div class="humano">
                <h3 class="tit">Nombre <span class="requerido">*</span></h3>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?=$nombre?>">
                <?php 
                    /*if (isset($errores['nombre'])) {
                        echo '<div class="error">';
                        echo '<p>'.$errores['nombre'].'</p>';
                        echo '</div>';
                    }*/
                   // mistake($_POST["nombre"]);
                ?>
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?=$apellidos?>">
                <?php 
                   /* if (isset($errores['apellidos'])) {
                        echo '<div class="error">';
                        echo '<p>'.$errores['apellidos'].'</p>';
                        echo '</div>';
                    }*/
                    //mistake($_POST["apellidos"]);
                ?>
                
                <div class="sex">
                    <label for="sexo">Hombre</label>
                    <input type="radio" name="sexo" id="H">
                    <label for="sexo">Mujer</label>
                    <input type="radio" name="sexo" id="M">
                    <label for="sexo">Otro</label>
                    <input type="radio" name="sexo" id="O">
                </div>
            </div>

            <h3 class="tit">Fecha de nacimiento <span class="requerido">*</span></h3>
            <input type="date" name="fecha" id="fecha" style="width:90%;padding:5px">

            <div class="direccion">
                <h3 class="tit">Direccion <span class="requerido"></span></h3><br>
                <label for="calle" class="lb">Calle <span class="requerido">*</span></label>
                <label for="piso" class="lb" id="floor" style="margin-left: 64.5%;">Piso<span class="requerido">*</span></label><br>
                <input type="text" name="calle" id="calle" placeholder="Calle" style="width:70%;">
                <input type="text" name="piso" id="piso" placeholder="Piso" style="width:20%;"><br>

                <label for="cp" class="lb">codigo postal<span class="requerido">*</span></label>
                <label for="ciudad" class="lb" style="margin-left: 16%;">ciudad<span class="requerido">*</span></label><br>
                <input type="text" name="cp" id="cp" placeholder="Codigo Postal" style="width: 30%;">
                <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" style="width: 60%;"><br>

                <label for="pais">Pais<span class="requerido">*</span></label><br>
                <input list="paisoption" id="pais" name="pais" placeholder="Pais" style="width: 90%;">
                <datalist id="paisoption">
                    <option value="España"></option>
                    <option value="Francia"></option>
                    <option value="Italia"></option>
                    <option value="Alemania"></option>
                    <option value="Reino Unido"></option>
                    <option value="Paises Bajos"></option>
                    <option value="Polonia"></option>
                    <option value="Suiza"></option>
                    <option value="Andorra"></option>
                </datalist>
            </div>
            <h3 class="tit">Direccion mail <span class="requerido">*</span></h3>
            <input type="email" name="mail" id="mail" placeholder="Correo electronico (e.g correo@gmail.es)" style="width: 90%;">
            <p class="recmail">Les recomendamos no utilizar los siguientes proveedores de correos: T-Online, Hotmail, live, Msn y Outlook dado que hay problemas a la hora de recibir nuestros emails en estos correos.</p>

            <div class="userpass">
                <h3 class="tit">Elija nombre de usuario y contraseña <span class="requerido">*</span></h3>
                <input type="text" name="user" id="user" placeholder="Nombre de usuario"><br>
                <input type="password" name="pass" id="pass"placeholder="Contraseña (8-64 caracteres,debe incluir letras y numeros)"><br>
                <input type="password" name="reppass" id="reppass" placeholder="Repita su contraseña"><br>
            </div>

            <h3 class="tit">Politicas legales <span class="requerido">*</span></h3>
            <input type="checkbox" name="check1" id="check1">
            <label for="check1" class="recmail">Por la presente declaro estar de acuerdo con las Condiciones legales. Declaro haber leído las Condiciones de Revocación.</label><br>
            
            <input type="checkbox" name="check2" id="check2">
            <label for="check2" class="recmail">Declaro haber leido la Política de privacidad y estoy de acuerdo con el almacenamiento de mis datos. Se que puedo revocar mi consentimiento en cualquier momento.</label><br>
            
            <input type="checkbox" name="check3" id="check3">
            <label for="check3" class="recmail">Declaro estar de acuerdo y solicito expresamente que comience la provisión de los servicios solicitados por mí antes de que expire el período de revocación. Soy consciente de que perderé mi derecho de revocación en caso de un cumplimiento completo del contrato por ustedes.</label><br>


            <input type="submit" value="Registrarse" class="enviar" name="enviar">
        </form>
    </div>
</body>
</html>