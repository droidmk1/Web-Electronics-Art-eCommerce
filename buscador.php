<?php
require_once('db.php');
$sql = 'SELECT * FROM productos WHERE nombre_producto LIKE :search';
$caja = isset($_GET['caja']) ? $_GET['caja'] : '';
$array[':search'] = '%' . $caja . '%';
$statement = $pdo->prepare($sql);
$statement -> execute($array);
$result = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & SQL</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Buscador sencillo con LIKE</h1>
    <hr>
    <div class="contenedor1">
        <form action="" class="formulario1" method="GET">
            <input type="text" name="caja" placeholder="Ingrese el titulo" class="buscador"class="buscador" value="<?php echo $caja; ?>"">
            <br>
            <input type="submit" value="BUSCAR" class="boton1">
        </form>
    </div>
    <div class="contenedor2">
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Contenido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $rs)
                {
                ?>
                <tr>
                    <td><?php echo $rs['titulo']; ?></td>
                    <td><?php echo $rs['contenido'] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                <td colspan="4"><a class="boton" href="lecciones.html">Lecciones</a></td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>