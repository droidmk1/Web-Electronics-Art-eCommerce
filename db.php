
<?php
$dsn = 'mysql:dbname=electro;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $pdo = new PDO ($dsn,
                    $user,
                    $password);
    // echo 'conexion correcta';
} catch (PDOException $e) {
    echo 'Error al acceder a la base de datos: '.$e->getMessage();
}
?>