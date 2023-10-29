<?php


require_once('index.php'); // Reemplaza 'tus_clases.php' con la ruta real a tu archivo que contiene las clases.

$baseDeDatos = new BaseDeDatos();
$baseDeDatos->conectar("localhost", "root", "", "escuela");


// Verifica si se envió el formulario de agregar un producto
if (isset($_POST['submit_agregar'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $producto = new Producto(null, $nombre, $precio, $cantidad);
    $abm = new ABM($baseDeDatos);
    $abm->agregar($producto);
}

// Verifica si se envió el formulario de editar un producto
if (isset($_POST['submit_editar'])) {
    $id = $_POST['id_edit'];
    $nombre = $_POST['nombre_edit'];
    $precio = $_POST['precio_edit'];
    $cantidad = $_POST['cantidad_edit'];
    $producto = new Producto($id, $nombre, $precio, $cantidad);
    $abm = new ABM($baseDeDatos);
    $abm->editar($producto);
}

// Verifica si se envió el formulario de eliminar un producto
if (isset($_POST['submit_eliminar'])) {
    $id = $_POST['id_eliminar'];
    $abm = new ABM($baseDeDatos);
    $abm->eliminar($id);
}

// Listar productos
$abm = new ABM($baseDeDatos);
$productos = $abm->listar();
?>




