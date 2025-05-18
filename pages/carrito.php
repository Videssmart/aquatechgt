<div class="carritoTitulo">
    <h2 class="subTitles3">Tu carrito de compras</h2>
    <p>Revisa tus productos antes de finalizar la compra</p>
</div>

<div class="carritoPage">
    <div class="container text-center">
        <div class="containerCarrito">
            <div class="productosCarrito">
                <?php
                $total = 0;

                foreach ($_SESSION['CARRITO'] as $indice => $producto): ?>

                    <div class="productoCarrito row">
                        <?php if (!empty($_SESSION['CARRITO'])) { ?>
                            <div class="imagenProductoCarrito col-sm-3" style="background-image: url(<?php echo $producto['IMAGEN'] ?>);">
                            </div>
                            <div class="descProductoCarrito col-sm-9">
                                <div class="contenedorDesc">
                                    <div class="textoDetalles">
                                        <div class="textoDetallesContainer">
                                            <h6><?php echo $producto['NOMBRE'] ?></h6>
                                            <p><?php echo $producto['DESCRIPCION'] ?></p>
                                        </div>

                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                                            <div class="textoDetallesEliminar">
                                                <button name="btnAccion" value="Eliminar" type="submit"><i class="fi fi-br-trash"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="precioCantidad">
                                        <p class="precio">Q<?php echo $producto['PRECIO'] ?></p>
                                        <p class="cantidad">
                                            <?php echo $producto['CANTIDAD'] ?>
                                        </p>
                                        <p class="subtotal">Subtotal: Q<?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $total = 0;
                            if (isset($_SESSION['CARRITO']) && is_array($_SESSION['CARRITO'])) {
                                foreach ($_SESSION['CARRITO'] as $producto) {
                                    $total += $producto['PRECIO'] * $producto['CANTIDAD'];
                                }
                            } ?>
                        <?php } else { ?>
                            <div class="alert alert-success">
                                No hay nada en el carrito...
                            </div>
                        <?php } ?>
                    </div>
                <?php endforeach; ?>


            </div>


            <div class="pedido">
                <h5>Resumen del pedido</h5>
                <div class="containerPedido">
                    <p class="t1">Subtotal</p>
                    <p class="t2">Q<?php
                                    $total = 0;
                                    if (isset($_SESSION['CARRITO']) && is_array($_SESSION['CARRITO'])) {
                                        foreach ($_SESSION['CARRITO'] as $producto) {
                                            $total += $producto['PRECIO'] * $producto['CANTIDAD'];
                                        }
                                    }
                                    echo number_format($total, 2); ?></p>
                </div>
                <div class="containerPedido">
                    <p class="t5">Envío</p>
                    <p class="t6">Nos pondremos en contacto contigo</p>
                </div>
                <hr>
                <div class="containerPedido">
                    <p class="t7">Total</p>
                    <p class="t8">Q<?php echo number_format($total, 2); ?></p>
                </div>
                <form
                    action="https://formspree.io/f/xrbqjdrz" 
                    method="POST" class="formularioPedido">
                    <label for="email">Correo de contacto:</label>
                    <input type="email" name="email" class="form-control" type="email" placeholder="Correo Electrónico"
                        required> <br>
                    <label for="tel">Número Teléfonico:</label>
                    <input type="tel" name="tel" class="form-control" type="tel" placeholder="Número Teléfonico"
                        required>
                    <?php foreach ($_SESSION['CARRITO'] as $i => $producto): ?>
                        <input type="hidden" name="Producto_<?php echo $i + 1; ?>_Nombre" value="<?php echo $producto['NOMBRE']; ?>">
                        <input type="hidden" name="Producto_<?php echo $i + 1; ?>_Precio" value="Q<?php echo number_format($producto['PRECIO'], 2); ?>">
                        <input type="hidden" name="Producto_<?php echo $i + 1; ?>_Cantidad" value="<?php echo $producto['CANTIDAD']; ?>">
                        <input type="hidden" name="Producto_<?php echo $i + 1; ?>_Subtotal" value="Q<?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?>">
                    <?php endforeach; ?>
                    <input type="hidden" name="Total" value="Q<?php echo number_format($total * 1.16, 2); ?>">
                    <div class="botonPedido">
                        <button type="submit" class="botonesAqua">Enviar pedido</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>