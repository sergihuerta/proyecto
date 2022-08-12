<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_DIR;?>/app/vistas/hoja_estilo/hoja_estilo.css">
</head>
<body>

    <header>

        <div class="cabecera">

            <h1>Orquestra Camerata Eduard Toldrà</h1>

        </div>

    </header>

    <div class="menu">

            <a class="primero" href="<?php echo DOMAIN;?>/controlsesion/inicio">Inici</a>
            <a href="<?php echo DOMAIN;?>/controlsesion/multimedia">Multimèdia</a>
            <a href="<?php echo DOMAIN;?>/controlsesion/contacto">Contacte</a>
            <a href="<?php echo DOMAIN;?>/controlsesion/acceder">Accedir</a>

    </div>

    <main>

        <h2 class="bienvenida">Benvinguts a l'intranet de l'orquestra</h2>

        
        <form action="<?=DOMAIN?>/controlsesion/autentificar" method="post" class="formulario2">

            <h3>Autentificació:</h3>

            <p class="mensaje"><?=$mensaje?></p>

            <div class="cajaFormulario">

                <label for="usuario">Usuari: </label>
                <input type="text" name="usuario" value='<?= $usuario ?>'>

            </div>
            <div class="cajaFormulario">

                <label for="clave">Clau: </label>
                <input type="password" name="clave" value="<?= $clave ?>">

            </div>
            <div class="cajaFormulario">

                <input type="submit" name="login" value="Login">

            </div>

        </form>

    </main>
    <footer class="pie">

        <p class="parrafoPie">&copy;<time datetime="2022">2022 Sergi Huerta</time></p>

    </footer>


</body>
</html>