<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
        <script src="/AralixDesigns/Javascript/Loader.js"></script>
        <script
          src="https://kit.fontawesome.com/1e193e3a23.js"
          crossorigin="anonymous"
        ></script>
    
        <link
          rel="shortcut icon"
          href="/AralixDesigns/media/img/AralixFavicon.png"
          type="image/x-icon"
        />
        <link rel="stylesheet" href="/AralixDesigns/Styles/styles.css" />
    
        <title>Aralix - Elegir Plan</title>
      </head>
<body>
    <!--
    
        Gradient Background

    -->

    <div class="bg-gradient"></div>

    <!--
    
        Header

    -->

    <div id="header"></div>

    <!--
    
        Scroll Button

    -->

    <button class="scrollTop" id="scrollTop" onclick="topFunction()">
      <i class="fas fa-angle-up"></i>
    </button>

    <!--
    
        Scroll Indicator

    -->

    <div class="scroll-indicator" id="scroll-indicator">
      <div class="progress-bar" id="bar"></div>
    </div>
    <!--
    
        Login Frame

    -->

    <div class="login-wrapper">
      <div class="login-frame">
        <button class="close" onclick="closeModal()">
          <i class="fas fa-times"></i>
        </button>
        <div class="login-logo">
          <img src="/AralixDesigns/media/svg/AralixFavicon.svg" alt="" />
        </div>
        <div class="login-form">
          <h1>Login</h1>
          <form action="" method="POST">
            <input type="text" placeholder="Username" />
            <input type="password" placeholder="Password" />
            <input type="submit" value="Login" />
          </form>
        </div>
      </div>
    </div>

    <div class="plan-modal" id="plan-modal">
      <?php

      $plan = $_GET['Plan'];

      if($plan == "Multi_Pagina"){
        $plan = "Multi Página";
      }else if($plan == "Tienda_Online"){
        $plan = "Tienda Online";
      }else{
        $plan = "OnePage";
      }

      $modal = '  <div class="plan">
                      <button class="close" onclick="closePlan()">
                      <i class="fas fa-times"></i>
                      </button>
                      <div class="plan-logo">
                          <img src="/AralixDesigns/media/svg/AralixLogo Color.svg" alt="" />
                      </div>
                          <h1>Solicitud</h1>
                          <hr />
                          <p>
                              Envíe su solicitud y le contestaremos a la brevedad para
                              empezar a trabajar en su proyecto.
                          </p>

                          <form class="plan-modal-content" action="/AralixDesigns/Mail/planMail.php" method="POST">

                          <input
                              type="text"
                              name="Plan"
                              placeholder="Plan"
                              readonly
                              value="' . $plan . '"
                          />

                          <input
                              type="text"
                              name="Nombre"
                              placeholder="Nombre"
                              required 
                          />

                          <input
                              type="email"
                              name="Email"
                              placeholder="Correo Electrónico"
                              required
                          />

                          <input
                              type="text"
                              name="Telefono"
                              placeholder="Telefono / Celular"
                              required
                          />

                          <textarea
                              type="text"
                              name="Comentario"
                              placeholder="Comentario"
                              required
                          ></textarea>

                          <input type="submit" />

                      </form>
                  </div>';

      echo $modal;

      ?>
      <div class="burbujas">
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
      </div>
    </div>

    <div id="footer"></div>
    
</body>
</html>