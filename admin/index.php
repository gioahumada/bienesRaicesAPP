<?php

    //IMPORTAR CONEXION 

    require '../includes/config/database.php';
    $db = conectarDB();

    //Escribir el Query

    $query = "SELECT * FROM propiedades";

    //Consultar la BD

    $resultado = mysqli_query($db, $query);

    //Muestra mensaje condicional

    $mensaje = $_GET['mensaje'] ?? null;
    require '../includes/templates/headeralt.php';



?>

<main class="contenedor seccion">
    <h1>Administrador</h1>

    <?php if ($mensaje === 'Registrado' && $action === 'crear'): ?>
        <p class="alerta exito">Propiedad creada correctamente</p>
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            while($propiedad = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio" class="imagen-tabla"></td>
                    <td>$<?php echo number_format($propiedad['precio'], 0); ?></td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="propiedades/actualizar.php" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
</main>

<?php 
    require '../includes/templates/footer.php';
?>