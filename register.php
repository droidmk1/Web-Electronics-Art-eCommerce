<?php
require_once('db.php');
if($_POST){
    $sql_insert = 'INSERT INTO usuarios (tipo_user, nombre, apellido, email, pass) VALUES (2, ?, ?, ?, ?)';
    $nomb = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    $statement_insert = $pdo->prepare($sql_insert);
    $statement_insert->execute(array($nomb,$apellido,$email,$pass));

    header('location:ok_user.html');
}

?>


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
            <form action="">
                <div class="search">
                    <input type="text" name="producto" placeholder=" ¿Qué producto deseas buscar?">
                </div>
                <button class="cont_lupa" type="submit">
                    <img class="lupa" src="img/lupa.png" width="35" height="35" alt="">
                </button>
            </form>
        </div>
        <div class="op1"><a href="#"><img class="ic" src="img/abrir-caja.png" alt="img_pedidos" width="25" height="25"> Mis pedidos</a></div>
        <div class="op2"><a href="login.html"><img class="ic" src="img/usuario.png" alt="img_usuario" width="25" height="25"> Mi cuenta</a></div>        
    </header>
    <!-- fin cabezera -->
    <br>
    <!-- registro -->
    <main>
        <form action="" class="formulario" method="POST">
            <h1>Crear cuenta en ElectronicsArt</h1>
            <div class="contenedor">
                <input type="text" name="nombre" placeholder="Ingrese su nombre" autocomplete="off" required>
                <input type="text" name="apellido" placeholder="Ingrese su apellido" autocomplete="off" required>
                <input type="email" name="email" placeholder="Ingrese un correo" required>
                <input type="password" name="pass" placeholder="Ingrese una contraseña" required>
                <input type="submit" value="Registrarse" class="button1">
            </div>
        </form>
    </main>
    <!-- fin - registro -->
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