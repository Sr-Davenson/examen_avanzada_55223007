<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
    <form action="Action/Regis.php" method="get">
        <label for="">Nombre</label>
        <input type="text" id="nombre" request>
        <label for="">Cantidad</label>
        <input type="number" id="Cantidad" min='1' request>
        <label for="">Precio Unitario</label>
        <input type="number" id="Precio_Unitario" min='1' request>
        <button type="submit">Guardar</button>
    </form>
    <a href="index.php">Volver</a>
</body>
</html>