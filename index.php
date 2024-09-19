<?php
session_start();
require_once("./app/config/dependencias.php");
require_once("./app/controller/inicio.php");
require_once("./app/controller/registro_producto.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS."inicio.css";?>">
    <link rel="stylesheet" href="./public/js/bootstrap-icons/font/bootstrap-icons.css">
    <title>Formulario de datos</title>
</head>
<body class="vh-100">
    <div class="row">
        <div class="col"></div>
        <div class="col mt-5 p-5 c-datos">
            <h1 class="text-center text-white mb-5">Bienvenido <i class="bi bi-emoji-sunglasses-fill"></i></h1>
            <h2 class="text-center text-white"><?= $_SESSION['registro']['nombre']." ".$_SESSION['registro']['apellido'];?> </h2>
            <p class="text-center text-white fs-4 mb-4"><?= $_SESSION['registro']['email'] ?></p> 
            <div class="d-flex justify-content-center">
                <a href="./cerrar_sesion.php" class="btn btn-danger">Cerrar sesion</a>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="./index.php" method="post">
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <i class="bi bi-cart-plus-fill fs-3 text-white mx-1"></i>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del producto" name="nombre_p" value="">
                </div>
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <i class="bi bi-currency-dollar fs-3 text-white mx-1"></i>
                    <input type="number" class="form-control" placeholder="Ingrese el precio del producto" name="precio_p" value="">
                </div>
                <div class="mt-3 c-button">
                    <button type="submit" class="btn w-100 text-white fs-4 border">Registrar producto</button> 
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col mt-5">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_SESSION['producto']) && !empty($_SESSION['producto'])) { ?>
                        <?php foreach ($_SESSION['producto'] as $producto) { ?>
                            <tr>
                                <td><?= $producto['nombre'];?></td>
                                <td>$<?= $producto['precio'];?></td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <p class="text-white fs-4"> <?="Tu carrito está vacío.";?> </p>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col"></div>
    </div>
</body>
</html>