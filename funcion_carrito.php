<?php
session_start();

$mensaje = "";

if (isset($_POST['btnAccion'])) {
    switch ($_POST['btnAccion']) {
        case 'Agregar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);
                $IMAGEN = openssl_decrypt($_POST['imagen'], COD, KEY);
                $NOMBRE = openssl_decrypt($_POST['nombre'], COD, KEY);
                $DESCRIPCION = openssl_decrypt($_POST['descripcion'], COD, KEY);
                $PRECIO = openssl_decrypt($_POST['precio'], COD, KEY);
                $CANTIDAD = openssl_decrypt($_POST['cantidad'], COD, KEY);

                $producto = array(
                    'ID' => $ID,
                    'IMAGEN' => $IMAGEN,
                    'NOMBRE' => $NOMBRE,
                    'DESCRIPCION' => $DESCRIPCION,
                    'PRECIO' => $PRECIO,
                    'CANTIDAD' => $CANTIDAD
                );
                
                $mensaje = 'Producto agregado al carrito';


                if (!isset($_SESSION['CARRITO'])) {
                    $_SESSION['CARRITO'] = array($producto);
                } else {
                    $idProductos = array_column($_SESSION['CARRITO'], 'ID');
                    if (in_array($ID, $idProductos)) {
                        foreach ($_SESSION['CARRITO'] as $index => $prod) {
                            if ($prod['ID'] == $ID) {
                                $_SESSION['CARRITO'][$index]['CANTIDAD'] += $CANTIDAD;
                                break;
                            }
                        }
                    } else {
                        $_SESSION['CARRITO'][] = $producto;
                    }
                }
            }
            break;


        case 'Eliminar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);
                // $mensaje .= "Ok ID correcto" . $ID;

                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    if ($producto['ID'] == $ID) {
                        unset($_SESSION['CARRITO'][$indice]);
                        // echo "<script>alert('Elemento borrado...')</script>";
                    }
                }
            } else {
                // $mensaje .= "Error ID incorrecto" . $ID;
            }

            
    }
}
