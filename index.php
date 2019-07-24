<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SOFTRAIN</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.7.x-->
  <link rel="stylesheet" href="css/bulma.css">
  <link rel="stylesheet" type="text/css" href="css/personal.css">
  <!--link rel="stylesheet" type="text/css" href="css/hero.css"-->
  <script async type="text/javascript" src="js/bulma.js"></script>
</head>
<body>
  <!-- Navigation bar -->
  <nav class="navbar has-background-softrain1 is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
          <img src="css/img/logotipo.jpg" width="" height="">
      </a>
      <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-end is-size-5">
        <a class="navbar-item has-text-weight-semibold has-text-orange" href="#about">
          <span class="icon">
            <i class="fas fa-info"></i>
          </span>
          <span>Acerca de Nosotros</span>
        </a>
        <a class="navbar-item has-text-weight-semibold has-text-orange" href="#services">
          <span class="icon">
            <i class="fas fa-bars"></i>
          </span>
          <span>Servicios</span>
        </a>
        <a class="navbar-item has-text-weight-semibold has-text-orange" href="#portfolio">
          <span class="icon">
            <i class="fas fa-th-list"></i>
          </span>
          <span>Portafolio</span>
        </a>
        <a class="navbar-item has-text-weight-semibold has-text-orange" href="#contact">
          <span class="icon">
            <i class="fas fa-envelope"></i>
          </span>
          <span>Contactanos</span>
        </a>
        <a class="navbar-item has-text-weight-semibold has-text-orange" href="controlador/autentificacion.php">
          <span class="icon">
            <i class="fas fa-user"></i>
          </span>
          <span>Log In</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="hero has-background-softrainheader is-fullheight is-fullheight-with-navbar">
    <div class="hero-body">
        <!--h1 class="title is-1">
          SOFTRAIN
        </h1>
        <h2 class="subtitle is-3">
          Solucion de transporte y logistica.
        </h2!-->
      </div>
  </section>

  <!-- Servicios -->
  <div class="">
  <section class="hero is-fullwidth has-background-softrainservicios" id="services">
    <div class="hero-body">
      <section class="section">
        <section class="section has-background-softrainleft">
          <h3 class="title is-size-1 has-text-orange"><strong>Servicios</strong></h3>
          <p class="subtitle is-size-3 has-text-orange">¿Que es lo que podemos hacer por usted?</p>

        </section>
          <div class="columns">
                <div class="column is-3">
                    <div class="card is-shady">
                        <header class="card-header is-size-4">
                            <p class="card-header-title has-text-link">
                              TRANSPORTE
                            </p>
                            <a class="card-header-icon">
                              <span class="icon">
                                <i class="fas fa-truck"></i>
                              </span>
                            </a>
                        </header>
                        <div class="card-image is-hidden-mobile">
                          <figure class="image is-4by3">
                            <img src="css/img/softrainpantalla.jpg" alt="Imagen">
                          </figure>
                        </div>
                        <div class="card-content is-size-6">
                            <div class="content">
                                <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                                <p><a href="#contact">Contáctanos</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="card is-shady">
                        <header class="card-header is-size-4">
                            <p class="card-header-title has-text-link">
                              LOGISTICA
                            </p>
                            <a href="#" class="card-header-icon">
                              <span class="icon">
                                <i class="fas fa-compass"></i>
                              </span>
                            </a>
                        </header>
                        <div class="card-image is-hidden-mobile">
                          <figure class="image is-4by3">
                            <img src="css/img/containers.jpg" alt="Placeholder image">
                          </figure>
                        </div>
                        <div class="card-content is-size-6">
                            <div class="content">
                                <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                                <p><a href="#contact">Contáctanos</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="card is-shady">
                        <header class="card-header is-size-4">
                            <p class="card-header-title has-text-link">
                              Transporte
                            </p>
                            <a href="#" class="card-header-icon">
                              <span class="icon">
                                <i class="fas fa-truck"></i>
                              </span>
                            </a>
                        </header>
                        <div class="card-image is-hidden-mobile">
                          <figure class="image is-4by3">
                            <img src="css/img/bg02.jpg" alt="Placeholder image">
                          </figure>
                        </div>
                        <div class="card-content is-size-6">
                            <div class="content">
                                <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                                <p><a href="#contact">Contáctanos</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="card is-shady">
                        <header class="card-header is-size-4">
                            <p class="card-header-title has-text-link">
                              Transporte
                            </p>
                            <a href="#" class="card-header-icon">
                              <span class="icon">
                                <i class="fas fa-truck"></i>
                              </span>
                            </a>
                        </header>
                        <div class="card-image is-hidden-mobile">
                          <figure class="image is-4by3">
                            <img src="css/img/bg03.jpg" alt="Placeholder image">
                          </figure>
                        </div>
                        <div class="card-content is-size-6">
                            <div class="content">
                                <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                                <p><a href="#contact">Contáctanos</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        <!--div class="container">
          <div class="columns">
            <div class="column">
              <div class="box">
                <div class="content">
                  <h4 class="title is-5">Logistica</h4>
                  Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín,
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="content">
                  <h4 class="title is-5">Transporte</h4>
                  Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín,
                </div>
              </div>
            </div>
          </div>

          <div class="columns">
            <div class="column">
              <div class="box">
                <div class="content">
                  <h4 class="title is-3">Logistica</h4>
                  <p class="subtitle is-5">Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín</p>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="content">
                  <h4 class="title is-5">Transporte</h4>
                  Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín,
                </div>
              </div>
            </div>
          </div>
        </div-->
      </section>

    </div>
  </section>
</div>
  <!--Nosotros -->
  <section class="section" id="about">
    <!-- Title -->
    <div class="section-heading">
      <h3 class="title is-2">Acerca de Nosotros.</h3>
      <h4 class="subtitle is-5">Somos una empresa de transporte y logistica en importacion.</h4>
      <div class="container">
        <p>El desarrollo del servicios en logistica de transporte, es nuestro fuerte<strong>4 años</strong> de una buena experiencia con la ayuda de
          <strong>tegnologia</strong>, extensivamente utilizando tecnicas modernas de <strong>logistica y transporte</strong>.
          apuntando a la oportunidad de un crecimiento para la satisfacion de nuestros clientes, es nuestro compromiso involucrarnos con su organizacion
          creando una ganancia para la competitividad para su comunidad.</p>
      </div>
    </div>

    <div class="columns has-same-height is-gapless">
      <div class="column">
  <!-- Perfil -->
        <div class="card">
        <article class="message is-info">
          <div class="message-body">
          <div class="card-content">
            <h3 class="title is-4">Informacion</h3>
            <div class="content">
                  <table class="table-profile">
                    <tr>
                      <th colspan="1"></th>
                      <th colspan="2"></th>
                    </tr>
                    <tr>
                      <td>Direccion:</td>
                      <td> <strong>Villa Exaltacion C/3 Nº 24-B El Alto</strong> <small>La Paz Bolivia</small></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><a href="mailto:operaciones@softrain-srl.com">operaciones@softrain-srl.com</a></td>
                    </tr>
                    <tr>
                      <td>Telefono:</td>
                      <td>+591 22810329</td>
                    </tr>
                  </table>
            </div>
            <div class="buttons has-addons is-centered"><a href="#contact" class="button is-link">Contactanos</a></div>
          </div>
          <br>
          <br>
          <br>
        </div>
  </article>
  </div>
  </div>
      <div class="column is-hidden-mobile">
        <!-- Profile picture -->
        <div class="card">
          <article class="message is-info">
            <div class="message-body">
              <div class="card-image">
                <figure class="image is-4by3 has-text-centered">
                  <img src="css/img/logotipo.jpg" alt="SOFTRAIN">
                </figure>
              </div>
              <br><br><br>
            </div>
          </article>
        </div>
      </div>

      <div class="column">
  <!-- tarjeta de los que trabajamos-->
        <div class="card">
          <article class="message is-info">
            <div class="message-body">

          <div class="card-content">
  <!-- Trajeta de Ronald -->
            <div class="media">
              <div class="media-left">
                <figure class="image is-48x48">
                  <img src="" alt="Foto Ronald">
                </figure>
              </div>
              <div class="media-content">
                <p class="title is-4">Ronald Chuquimia Q.</p>
                <p class="subtitle is-6">rchuquimia@softrain-srl.com</p>
              </div>
            </div>
  <!-- Trajeta de Marisol -->
            <div class="media">
              <div class="media-left">
                <figure class="image is-48x48">
                  <img src="" alt="Foto Marisol">
                </figure>
              </div>
              <div class="media-content">
                <p class="title is-4">Marisol Limachi P.</p>
                <p class="subtitle is-6">mlimachi@softrain-srl.com</p>
              </div>
            </div>
  <!-- Trajeta de Ximena -->
            <div class="media">
              <div class="media-left">
                <figure class="image is-48x48">
                  <img src="" alt="Foto Ximena">
                </figure>
              </div>
              <div class="media-content">
                <p class="title is-4">Ximena Chuquimia Q.</p>
                <p class="subtitle is-6">rchuquimia@softrain-srl.com</p>
              </div>
            </div>
  <!-- Trajeta de Monica -->
            <div class="media">
              <div class="media-left">
                <figure class="image is-48x48">
                  <img src="css/img/profile.png" alt="Foto Monica">
                </figure>
              </div>
              <div class="media-content">
                <p class="title is-4">Monica.</p>
                <p class="subtitle is-6">operaciones@softrain-srl.com</p>
              </div>
            </div>
          </div>
        </div>
      </article>
        </div>
        </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="section" id="portfolio">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Portafolio</h3>
        <h4 class="subtitle is-5">Nuestros Clientes y ultimos trabajos</h4>
      </div>
      <br>

      <div class="container portfolio-container">
        <div class="columns">
          <div class="column is-4">
            <!-- admin -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TITAN MEGA TRUCKS <small></small></span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-danger">WIP</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="css/img/logo 2.jpg" alt="Admin template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/admin.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/admin.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!-- cards -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>VILLA OROPEZA</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">?</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="css/img/2473034.jpg" alt="Cards template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/cards.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/cards.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!-- forum -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANSPORTE ESPAÑA</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">Mobile</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/forum.png" alt="Hero template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/forum.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/forum.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!-- insta album -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS WORLD RUNNER</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">Mobile</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/instaalbum.png" alt="Landing template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/instaAlbum.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/instaAlbum.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!-- landing -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS LINCEBOL</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">Mobile</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/landing.png" alt="Landing template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/landing.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/landing.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>

          </div>
          <div class="column is-4">
            <!-- band -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS 5 DE DICIEMBRE</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">?</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/band.png" alt="Band template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/band.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/band.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!-- cheatsheet -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS EUCALIPTO</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">?</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="https://dummyimage.com/555x255/000/fff" alt="Cheatsheet template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/cheatsheet.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/cheatsheet.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!-- hero -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS MAGDALENA</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">?</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/hero.png" alt="Hero template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/hero.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/hero.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!--kanban -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS ORURO</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">?</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/kanban.png" alt="Kanban template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/kanban.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/kanban.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!-- login -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS CANTUTA</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">Mobile</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/login.png" alt="Login template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/login.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/login.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
          </div>
          <div class="column is-4">
            <!-- blog -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS EMCAIN</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-danger">WIP</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/blog.png" alt="Blog template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/blog.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/blog.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!-- cover -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRUCKS SAN LUIS</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">Mobile</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/cover.png" alt="Cover template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/cover.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/cover.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!--inbox -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>TRANS CORAZON DE JESUS</span>
                  <!--span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">Mobile</span>
                  </span-->
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/inbox.png" alt="Inbox template screenshot">
                </figure>
              </div>
              <!--footer class="card-footer">
                <a href="templates/inbox.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/inbox.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
            <!--kanban with functional search>
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Kanban with Search box</span>
                  <span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">?</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="../images/kanban2.png" alt="Kanban template screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="templates/kanban[search].html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/kanban[search].html" class="card-footer-item">Source
                  Code</a>
              </footer>
            </div>
            <!--tabs-->
            <!--div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Modal Cards</span>
                  <span class="is-pulled-right">
                    <a href="https://github.com/jgthms/bulma/releases/tag/0.7.2">
                      <span class="tag is-default">v0.7.2</span>
                    </a>
                    <span class="tag is-default">Desktop</span>
                    <span class="tag is-default">?</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="https://dummyimage.com/555x255/000/fff" alt="modal-cards template screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="templates/modal-cards.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/modal-cards.html" class="card-footer-item">Source
                  Code</a>
              </footer-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Achievement Level -->
  <!-- <section class="section">
    <nav class="level">
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Tweets</p>
          <p class="title">3,456</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Following</p>
          <p class="title">123</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Followers</p>
          <p class="title">456K</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Likes</p>
          <p class="title">789</p>
        </div>
      </div>
    </nav>
  </section> -->


  <!-- Contact -->
<section class="" id="contact">
<section class="hero has-background-softraincontact is-fullwidth is-fullheight-whit-navbar">
  <div class="hero-body" >
    <div class="section-heading">
      <p class="title has-text-info is-1 is-centered"><strong>Contacto</strong></p>
    </div>
    <div class="columns">
      <div class="column is-5 is-offset-6">
        <p class="title is-4 has-text-info"><strong>Escríba sus datos para que podámos contactarnos con usted.</strong></p>
        <div class="field is-horizontal" >
          <div class="field-body">
            <div class="field is-expanded">
              <p class="control is-expanded">
                <input type="text" name="nombre" id="nombre" class="input is-medium is-focused" placeholder="Nombre:">
              </p>
            </div>
          </div>
        </div>
        <div class="field is-horizontal">
          <div class="field-body">
            <div class="field">
              <p class="control">
                <input type="type" class="input is-medium is-focused" name="email" id="email" placeholder="Email:" value="">
              </p>
            </div>
          </div>
        </div>
        <div class="field is-horizontal">
          <div class="field-body">
            <div class="field">
              <p class="control">
                <input type="type" class="input is-medium is-focused" name="telefono" id="telefono" placeholder="Telefono:" value="">
              </p>
            </div>
          </div>
        </div>
        <div class="field is-horizontal">
          <div class="field-body">
            <div class="field">
              <p class="control">
                <textarea type="type" class="textarea is-medium is-focused" name="email" id="email" placeholder="Escriba su mensaje..." value=""></textarea>
              </p>
            </div>
          </div>
        </div>
        <div class="buttons has-addons is-right">
            <button class="button is-link">Enviar ahora</button>
        </div>
      </div>
    </div>
    <div class="column is-9 is-offset-4">
          <div class="control">
            <p class="title has-text-white is-spaced"><span class="has-text-orange">Infor</span>mación</p>
            <p class="subtitle has-text-white"><strong class="has-text-orange">Dirección:</strong> Villa Exaltación C/3 Nº 24-B El Alto La Paz Bolivia</p>
            <p class="subtitle has-text-white"><strong class="has-text-orange">Email:</strong> operaciones@softrain-srl.com</p>
            <p class="subtitle has-text-white"><strong class="has-text-orange">Telefono:</strong> +591 2810329</p>
          </div>
    </div>
  </div>
</section>
</section>
  <!--section class="section" id="contact">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Contacto</h3>
        <h4 class="subtitle is-5"></h4>
      </div>
      <br>

      <div class="columns">
        <div class="column is-6 is-offset-3">
          <div class="box">
            <form action="controlador/enviarContacto.php" method="POST">
            <div class="field">
                <label class="label">Nombre o Empresa</label>
                <div class="control">
                  <input class="input" id="nombre" name="nombre" type="text" placeholder="Ingrese su Nombre">
                </div>
              </div>

              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left">
                  <input class="input" name="email" type="email" placeholder="Empresa@ejemplo.com" value="">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
              </div>

              <div class="field">
                <label class="label">Telefono</label>
                <div class="control has-icons-left">
                  <input class="input" name="telefono" type="number" placeholder="Ingrese su numero de telefono" value="">
                  <span class="icon is-small is-left">
                    <i class="fas fa-phone"></i>
                  </span>
                </div>
              </div>

              <div class="field">
                <label class="label">Mensaje</label>
                <div class="control">
                  <textarea class="textarea" name="mensaje" placeholder="ingrese su mensaje para que podamos ayudarlo"></textarea>
                </div>
              </div>

              <div class="field is-grouped has-text-centered">
                <div class="control">
                  <button class="button is-link is-large" id="enviar"><span class="icon">
                    <i class="fas fa-envelope"></i>
                  </span>
                  <span>Enviar</span></button>
                </div>
              </div>
              </form>
          </div>
          <div class="respuesta"></div>
        </div>
      </div>
    </div>
  </section-->

  <!-- Footer -->
  <div class="hero-footer">
  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Bulma Personal Template</strong> by <a href="https://mubaidr.js.org">Muhammad Ubaid Raza</a>. The
        source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
      </p>
    </div>
  </footer>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/contacto.js"></script>
</body>

</html>
