<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyect</title>
    <link rel="stylesheet" href="scss/estilos.css">
    <link rel="apple-touch-icon" href="https://plazavea.vteximg.com.br/arquivos/icon-pwa-512x512.png?v=636945836907500000" /><!-- /iOS Support --><!-- Icons --><link rel="icon" type="image/png" href="https://image.flaticon.com/icons/png/512/2584/2584687.png" sizes="32x32"/>
</head>
<body>
    <!-- cabezera -->
    <header>
        <a href="index.html" title="Ir a la pagina principal de ElectronicsArt">
        <div class="logo">
            <img src="img/flojo.png" width="80" height="80" alt="Logo">
        </div>
        </a>
        <div class="buscador">
            <form action="" class="buscador" method="GET">
                    <input type="text" name="caja" placeholder="¿Qué producto deseas buscar?" autocomplete="off" class="buscador" value="<?php echo $caja; ?>">
                </div>
                <button class="cont_lupa" type="submit">
                    <img class="lupa" src="img/lupa.png" width="35" height="35" alt="img_lupa">
                </button>
            </form>
        </div>
        <div class="op1"><a href="#"><img class="ic" src="img/abrir-caja.png" alt="img_pedidos" width="25" height="25"> Mis pedidos</a></div>
        <div class="op2"><a href="login.html"><img class="ic" src="img/usuario.png" alt="img_usuario" width="25" height="25"> Mi cuenta</a></div>        
    </header>
    <!-- fin cabezera -->
    <br>
    <!-- login -->
    <main>
        <form action="validar.php" class="formulario" method="POST">
            <h1>Iniciar Sesion en ElectronicsArt</h1>
            <div class="contenedor">
                <input name="email" type="text" placeholder="Ingrese su email" autocomplete="on" required>
                <input name="pass" type="password" placeholder="Ingrese su contraseña" required>
                <input name="login" type="submit" value="Iniciar sesion" class="button1">
                <p>¿No tiene cuenta? <a href="register.php" class="simple">aqui</a> para registrar</p>
            </div>
        </form>
    </main>
    <!-- fin - login -->
    <br>
    <!-- footer -->
    <footer>
        <small>
            ElectronicsArt
            Copyright &copy; 2021 Cardenas - Farfan - Aviles.
        </small>
    </footer>
    <!-- fin footer -->
</body>
</html>