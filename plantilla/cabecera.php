   <?php
function cabecera()
{ ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Proyecto Final</title>
    <link rel="icon" 
      type="image/png" 
      href="imagenes/logo.png">
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet"> 
  <body>

    <div class="page__container">
      <header class="header">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#eb2f64" fill-opacity="1" d="M0,192L40,197.3C80,203,160,213,240,186.7C320,160,400,96,480,101.3C560,107,640,181,720,202.7C800,224,880,192,960,176C1040,160,1120,160,1200,133.3C1280,107,1360,53,1400,26.7L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        <div class="header__image">
          <a href="index.php"><img src="imagenes/logo.png" id="header__img"></a>
        </div>
      </header>

      <nav class="navigation__nav">
        <ul>
          <li><a href="index.php">Inicio</a></li>
         <li> <a href="precio.php">Precio</a></li>
         <li> <a href="blog.php">Blog</a></li>
          <li><a href="documentacion.php">Documentación</a></li>
        </ul>  
      </div>

      </nav>



    <?php
    
     }
  function pie()
  { ?>
    <div class="footer margin-top-medium">
      <footer >
        Desarrollo Orientado a Objetos, Facultad de Ingenieria de Sistemas Computacionales.
        <br>Universidad Tecnológica de Panamá <br>
        <a href="https://github.com/FernandoC1217">Fernando Cutire</a>, <a href="https://github.com/Hellynger">Hellynger St Rose</a>, <a href="https://github.com/RafaSPlayer">Rafael Sáenz</a>, <a href="https://github.com/carloslambrano00">Carlos Lambraño</a></p>
      </footer>  
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,90.7C384,117,480,203,576,240C672,277,768,267,864,240C960,213,1056,171,1152,165.3C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
  </body>

  </html>
  <?php  }  ?>
