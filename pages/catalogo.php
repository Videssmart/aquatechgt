<div class="catalogoTitulo">
    <h3 class="subTitles2">Catalogo</h3>
</div>


<div class="productos">
    <div class="productosCards">
        <?php
        $sentencia = $pdo->prepare("SELECT * FROM `aqtproductos`");
        $sentencia->execute();
        $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <?php foreach ($listaProductos as $producto): ?>
            <div class="productosCardsCard" id="<?php echo $producto['ID']; ?>">
                <div class="productosCardsCardImage" style="background-image: url(<?php echo $producto["Imagen"] ?>);"></div>
                <h3 class="productosCardsCardTitulo"><?php echo $producto["Nombre"] ?></h3>
                <p class="productosCardsCardParrafo"><?php echo $producto["Descripcion"] ?></p>
                <div class="productosCardsCardPrecio">
                    <p class="precio">Q<?php echo $producto["Precio"] ?></p>


                    <form action="" class="form-agregar" method="POST">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto["ID"], COD, KEY); ?>">
                        <input type="hidden" name="imagen" id="imagen" value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY); ?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto["Nombre"], COD, KEY); ?>">
                        <input type="hidden" name="descripcion" id="descripcion" value="<?php echo openssl_encrypt($producto["Descripcion"], COD, KEY); ?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto["Precio"], COD, KEY); ?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY);?>">
                        <button name="btnAccion" value="Agregar" type="submit" class="botonCarrito">
                            <span class="iconoCarrito"><i class="fi fi-br-shopping-cart"></i> Agregar</span>
                        </button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>