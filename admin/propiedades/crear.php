<?php 
    require '../../includes/templates/headeralt.php';
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton-verde">Volver</a>
    
    <form class="formulario">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Titulo:</label>
            <input type="number" id="precio" placeholder="Precio">

            <label for="imagen">Titulo:</label>
            <input type="file" id="titulo">
        </fieldset>
    </form>

<?php 
    require '../../includes/templates/footer.php';
?>