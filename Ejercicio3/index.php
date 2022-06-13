<?php 
    if(isset($_COOKIE['usuario'])){
        $myuser = $_COOKIE['usuario'];
    }else
    {
        $myuser ="";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Mi usuario es: ". $myuser;
    ?>
        <form action="cargaUsuario.php" method="POST">
            <input type="text" name="user">
            <input type="submit" value="Cargar">
        </form>
</body>
</html>