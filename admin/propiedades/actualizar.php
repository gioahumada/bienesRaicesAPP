<?php 
    require '../../includes/config/database.php';
    $db = conectarDB();

    /* Consultar para tener los vendedores */

    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        /* echo "<pre>";
        var_dump($_POST);
        echo "</pre>"; */

        $titulo = mysqli_real_escape_string($db, htmlspecialchars($_POST['titulo']));
        $precio = mysqli_real_escape_string($db, htmlspecialchars($_POST['precio']));
        $descripcion = mysqli_real_escape_string($db, htmlspecialchars($_POST['descripcion']));
        $habitaciones = mysqli_real_escape_string($db, htmlspecialchars($_POST['habitaciones']));
        $wc = mysqli_real_escape_string($db, htmlspecialchars($_POST['wc']));
        $estacionamiento = mysqli_real_escape_string($db, htmlspecialchars($_POST['estacionamiento']));
        $vendedorId = mysqli_real_escape_string($db, htmlspecialchars($_POST['vendedor']));
        $creado = date('Y/m/d');

        $imagen = $_FILES['imagen'];

        if (!$imagen['name']) {
            $errores[] = "Debes añadir una imagen";
        }

        if (!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }

        if (!$precio) {
            $errores[] = "Debes añadir un precio";
        }

        if (strlen($descripcion) < 50) {
            $errores[] = "Debes añadir una descripcion y mas de 50 caracteres";
        }

        if (!$habitaciones) {
            $errores[] = "Debes añadir el numero de habitaciones";
        }

        if (!$wc) {
            $errores[] = "Debes añadir el numero de baños";
        }

        if (!$estacionamiento) {
            $errores[] = "Debes añadir el numero de estacionamientos";
        }

        if (!$vendedorId) {
            $errores[] = "Debes añadir un vendedor";
        }

        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $imagen = $_FILES['imagen'];
            $medida = 10 * 1024 * 1024; // 10MB

            if($imagen['size'] > $medida) {
                $errores[] = "La imagen es muy pesada (MAXIMO 10MB)";
            }
        } else {
            $errores[] = "Error al subir la imagen.";
        }

        /* echo "<pre>";
        var_dump($errores);
        echo "</pre>"; */

        if (!is_numeric($precio) || $precio <= 0) {
            $errores[] = "El precio debe ser un número positivo.";
        }

        if (empty($errores)) {
            // Subida de archivos
            $carpetaImagenes = '../../imagenes/';
        
            if (!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }
        
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
        
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";
        
            $resultado = mysqli_query($db, $query);
        
            if ($resultado) {
                header('Location: /admin?mensaje=Registrado&action=crear');
            }
        }


    }
    
    require '../../includes/templates/headeralt.php';
    
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej :3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" placeholder="Ej :3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej :3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">-- Seleccione --</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton-verde">
    </form>

</main>

<?php 
    require '../../includes/templates/footer.php';
?>