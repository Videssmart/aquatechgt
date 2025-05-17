<?php

$proyectos = [
    [
        "imagenProyecto" => "assets/img/proyecto.jpg",
        "tituloProyecto" => "Proyecto Industrial",
        "fechaProyecto" => "Ciudad de Guatemala, 2022",
        "descProyecto" => "Diseño e instalación de un sistema de tratamiento para aguas residuales industriales con alto contenido de químicos."
    ],
    [
        "imagenProyecto" => "assets/img/proyecto.jpg",
        "tituloProyecto" => "Proyecto Industrial",
        "fechaProyecto" => "Ciudad de Guatemala, 2022",
        "descProyecto" => "Diseño e instalación de un sistema de tratamiento para aguas residuales industriales con alto contenido de químicos."
    ],
    [
        "imagenProyecto" => "assets/img/proyecto.jpg",
        "tituloProyecto" => "Proyecto Industrial",
        "fechaProyecto" => "Ciudad de Guatemala, 2022",
        "descProyecto" => "Diseño e instalación de un sistema de tratamiento para aguas residuales industriales con alto contenido de químicos."
    ]
]
?>

<div class="proyectoTitulo">
    <h3 class="subTitles2">Proyectos</h3>
</div>

<div class="proyectos">
    <div class="proyectosCards">
        <?php foreach ($proyectos as $proyecto): ?>
            <div class="proyectosCardsCard" style="background-image: url(<?php echo $proyecto["imagenProyecto"]; ?>);">
                <div class="overlay">
                    <h5><?php echo $proyecto["tituloProyecto"]; ?></h5>
                    <p class="fecha"><?php echo $proyecto["fechaProyecto"]; ?></p>
                    <p class="desc"><?php echo $proyecto["descProyecto"] ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>


<a href="https://wa.me/50255892824" class="botonWp"  target="_blank" title="Chatea con nosotros">
    <img src="assets/img/whatsapp.png" alt="Icono de whatsapp">
</a>