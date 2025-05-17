<?php
$recursos = [
    [
        'iconoCard' => '<i class="fi fi-rr-raindrops"></i>',
        'tituloCard' => 'Industrial',
        'parrafoCard' => 'Soluciones completas para el tratamiento de agua para grandes caudales.'
    ],
    [
        'iconoCard' => '<i class="fi fi-rr-hand-holding-droplet"></i>',
        'tituloCard' => 'Domiciliar',
        'parrafoCard' => 'Equipos de purificación y tratamiento de agua para domicilios y oficinas.'
    ],
    [
        'iconoCard' => '<i class="fi fi-br-arrow-up-from-ground-water"></i>',
        'tituloCard' => 'Acuicultura y aguas residuales',
        'parrafoCard' => 'Equipos para oxigenación del agua.'
    ]
];

$productos = [
    [
        'imagenProducto' => 'assets/img/producto0.png',
        'tituloProducto' => 'Titulo Producto',
        'parrafoProducto' => 'parrafo y descripcion del producto',
        'precioProducto' => 'Q1,500.00'
    ],
    [
        'imagenProducto' => 'assets/img/producto1.png',
        'tituloProducto' => 'Titulo Producto',
        'parrafoProducto' => 'parrafo y descripcion del producto',
        'precioProducto' => 'Q1,500.00'
    ],
    [
        'imagenProducto' => 'assets/img/producto2.png',
        'tituloProducto' => 'Titulo Producto',
        'parrafoProducto' => 'parrafo y descripcion del producto',
        'precioProducto' => 'Q1,500.00'
    ]
]
?>

<div class="quieneSomos">
    <h2 class="subTitles">¿Quiénes somos?</h2>
    <p class="parrafos">En Aqua Tech Innovations somos especialistas en soluciones integrales para el tratamiento de agua, 
        dando solución a las necesidades de negocios, hogares e industrias. Nos dedicamos a la potabilización, purificación 
        y mejora de la calidad del agua, así como el diseño e implementación de sistemas para acuicultura y equipos para tratamiento 
        de aguas residuales.</p>
</div>

<div class="servicios">
    <h2 class="subTitles">Nuestros servicios</h2>
    <div class="serviciosCards">
        <?php foreach ($recursos as $recurso): ?>
        <div class="serviciosCardsCard">
            <span class="serviciosCardsCardIcon"><?php echo $recurso["iconoCard"]?></span>
            <h3 class="serviciosCardsCardTitulo"><?php echo $recurso["tituloCard"]?></h3>
            <p class="serviciosCardsCardParrafo"><?php echo $recurso["parrafoCard"]?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="productos">
    <h2 class="subTitles">Nuestros productos</h2>
    <div class="productosCards">
        <?php foreach ($productos as $producto): ?>
            <div class="productosCardsCard">
                <div class="productosCardsCardImage" style="background-image: url(<?php echo $producto["imagenProducto"]?>);"></div>
                <h3 class="productosCardsCardTitulo"><?php echo $producto["tituloProducto"]?></h3>
                <p class="productosCardsCardParrafo"><?php echo $producto["parrafoProducto"]?></p>
                <div class="productosCardsCardPrecio">
                    <p class="precio"><?php echo $producto["precioProducto"]?></p>
                   <a href="index.php?seccion=catalogo"><button class="botonCarrito"><span class="iconoCarrito"><i class="fi fi-bs-shop"></i></span> Catalogo</button></a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>



<div class="cotizacion">
    <div class="cotizacionElementos">
        <h3 class="cotizacionElementosTitulo"><span class="cotizacionElementosTituloIcono"><img src="assets/img/iconoLlamada.png" alt="Icono de llamada"></span> ¿Necesitas una solución personalizada?</h3>
        <p class="cotizacionElementosParrafo">Realiza tu cotización</p>
        <a href="https://wa.me/50255892824" target="_blank" class="cotizacionElementosLink"><button class="cotizacionElementosLinkBoton"><span class="cotizacionElementosLinkBotonIcono"><i class="fi fi-brands-whatsapp"></i></span> Whatsapp</button></a>
    </div>
</div>


<a href="https://wa.me/50255892824" class="botonWp"  target="_blank" title="Chatea con nosotros">
    <img src="assets/img/whatsapp.png" alt="Icono de whatsapp">
</a>

