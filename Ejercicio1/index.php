
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
//miro si he tengo un estilo definido, porque entonces tengo que cargar la

if (isset($_COOKIE["estilo"])){
    echo '<link rel="STYLESHEET" type="text/css" href="'.$_COOKIE["estilo"].'.css">';
}

?>
</head>
<body>
<h1>Cambiar de Color la página</h1>
    <form action="cambiarColor.php" method="post">
        <select name="estilo">
            <option value="rojo">Rojo
            <option value="verde">verde
            <option value="azul">azul   
        </select>
<input type="submit" value="Actualizar Color de página">
    </form>
    
</body>
</html>