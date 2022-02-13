<?php
require_once('db.php');
if(isset($_POST['login'])){
    $nomb = $_POST['email'];
    $pass = $_POST['pass'];

    $contador = 0;
    $sql = "SELECT * FROM usuarios";
    $statement = $pdo->prepare($sql);
    $statement -> execute(array());
    $result = $statement->fetchAll(); // aqui esta la info de la tabla en un vector

    foreach($result as $rs){
        if($rs['email'] == $nomb && $rs['pass'] == $pass){
            $contador++;
            $user = $rs['tipo_user'];
        }
        
    }
}

if($contador == 1){
    if($user == 1){
        header("location:ok_admin.html");
    }
    if($user == 2) {
        header("location:ok_user.html");
    }
}
else{
    header("location:login.php");
}
?>