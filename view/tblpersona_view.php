<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Ejemplo 1 - MVC PHP
        </title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consulta as $datos): ?>
                <tr>
                    <td><?php echo $datos['id']; ?></td>
                    <td><?php echo $datos['nombre']; ?></td>
                    <td><?php echo $datos['edad']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <a href="index.php?accion=nuevo">Nuevo registro.</a>
        <br> 
        <a href="index.php?accion=modificar">Modificar registro.</a>
        <br> 
        <a href="index.php?accion=eliminar">Eliminar registro.</a>
    </body>
</html>