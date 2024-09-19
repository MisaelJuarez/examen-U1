<?php

if ($_POST) {
    if (isset($_POST['nombre_p']) && !empty($_POST['nombre_p']) && 
        isset($_POST['precio_p']) && !empty($_POST['precio_p'])) {
            $nombreProducto = $_POST['nombre_p'];
            $precioProducto = $_POST['precio_p'];
        
            if (!isset($_SESSION['producto'])) {
                $_SESSION['producto'] = [];
            }
            $_SESSION['producto'][] = ['nombre' => $nombreProducto, 'precio' => $precioProducto];
    } else {
        echo "<script>alert('Porfavor ingresa datos en los campos');</script>";
    }
}


?>