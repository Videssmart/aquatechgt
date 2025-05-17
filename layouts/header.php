<?php
$seccion = $_GET['seccion'] ?? 'inicio';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Especialistas en tratamiento de aguas">
  <meta name="author" content="Videss Smart">
  <meta name="copyright" content="Videss Smart Copyright">
  <meta name="robots" content="index">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-straight/css/uicons-bold-straight.css'>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Aquatechgt</title>
</head>

<body>
  <header id="header">
    <nav class="navbar navbar-expand-lg bg-transparent" id="navbarPc">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?seccion=inicio"><img src="assets/img/logoAquatechgt.png" alt="Logotipo de Aquatech"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?seccion=inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?seccion=catalogo">Catalogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?seccion=nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?seccion=servicios">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?seccion=proyectos">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?seccion=contacto">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link carrito" href="index.php?seccion=carrito"><i class="fi fi-br-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar bg-transparent static-top">
      <div class="container-fluid">
        <a class="navbar-brand" href=""> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Inicio</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link <?= $seccion == 'inicio' ? 'active' : '' ?>" aria-current="page" href="index.php?seccion=inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $seccion == 'catalogo' ? 'active' : '' ?>" aria-current="page" href="index.php?seccion=catalogo">Catalogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $seccion == 'nosotros' ? 'active' : '' ?>" href="index.php?seccion=nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $seccion == 'servicios' ? 'active' : '' ?>" href="index.php?seccion=servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $seccion == 'proyectos' ? 'active' : '' ?>" href="index.php?seccion=proyectos">Proyectos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $seccion == 'contacto' ? 'active' : '' ?>" href="index.php?seccion=contacto">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $seccion == 'carrito' ? 'active' : '' ?>" href="index.php?seccion=carrito"><i class="fi fi-br-shopping-cart"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="containerMensajeCarrito">
      <br>
      <?php if($mensaje!=''){?> 
      <div class="alert alert-success">
        <?php echo $mensaje?>
        <a href="index.php?seccion=carrito" class="badget">Ver carrito</a>
      </div>
      <?php }?> 
    </div>
    <div class="infoHeader" id="infoHeader">
      <h1 class="headerTitle">SOLUCIONES INTEGRALES EN TRATAMIENTO DE AGUA</h1>
      <a href="https://wa.me/50255892824" target="_blank" title="Chatea con nosotros"><button class="headerBotonCotizar botonesAqua">Solicitar Cotización</button></a>
    </div>
  </header>