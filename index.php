<?php

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

if ( isset($_POST['peso']) && isset($_POST['altura']) && is_numeric($_POST['peso']) && is_numeric($_POST['altura'])) {

  $peso = $_POST['peso'];
  $altura = $_POST['altura'];

  //echo $peso + $altura;
  $imc = $peso / ($altura*$altura);
  $imc = round($imc,1);//poner los decimales que queramos



  if ($imc<18.5) {
    $resultado = "Peso inferior al normal";
    $color="red";
  }


  if ($imc >= 18.5 && $imc < 24.9) {
    $resultado = "Normal";
    $color="green";
  }


  if ($imc >= 24.9 && $imc < 29.9) {
    $resultado = "Peso superior al normal";
    $color="pink";
  }

  if ($imc>30) {
    $resultado = "Obesidad";
    $color="orange";
  }
//  echo round($imc,1);//funcion para decirle decimales queremos yeea

}

/*
echo "El numero 1 es: ".$peso;
//echo "<br>";
echo "El numero 2 es: ".$altura;
*/


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Calculadora IMC</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4">
      <a class="navbar-brand" href="#page-top">Calculadora IMC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">Sobre nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Servivios</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contactos</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header-->
  <header class="bg-primary bg-gradient text-white">
    <div class="container px-4 text-center">
      <h1 class="fw-bolder">Bienvenid  Calculadora IMC</h1>
      <p class="lead">No es belleza es Salud</p>
      <a class="btn btn-lg btn-light" href="#about">Vamos a Calculadora!</a>
    </div>
    <div class="row gx-4 justify-content-center">
      <div class="col-lg-8">


  </header>
  <!-- About section-->
  <section id="about">
    <div class="container px-4">

      <div class="row gx-4 justify-content-center">

        <div class="col-lg-8">

          <div class="row">
            <div class="col-lg-6">
              <form class="" action="index.php" method="POST">
                Peso (KG) -> <br> <input type="number" step=".01" name="peso" value="" placeholder="Tu Peso en kilogramos" required><br><br>
                Altura (M) -> <br> <input type="number" step=".01" name="altura" value="" placeholder="Tu Altura en Metros" required>
                <input type="submit" name="" value="CALCULAR">
              </form>
            </div>
            <div class="col-lg-6">
              <?php if (isset($imc)) { ?>
                <?php echo "Tu I.M.C es de -> ".$imc; ?>
                  <br>
                  <div style="color:<?php echo $color;?>" >Resultado: <?php echo $resultado; ?></div>
              <?php } ?>
            </div>
          </div>

          <!-- introduzco cja de otra web section-->


          <br>

          <a href="<!-- direccion pagina consulta-->">Consulta mas informacion en Clinica Salud</a>
          <br><br><br>
          <div class="py-5 bg-image-full" style="background-image: url('imagenes/salud.jpg')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>


        </div>


            <!-- introduzco cja de otra web section-->

        </div>

      </div>

    </div>
  </section>
  <!-- Services section-->
  <section class="bg-light" id="services">
    <div class="container px-4">
      <div class="row gx-4 justify-content-center">
        <div class="col-lg-8">
          <h2>Services we offer</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact section-->
  <section id="contact">
    <div class="container px-4">
      <div class="row gx-4 justify-content-center">
        <div class="col-lg-8">
          <h2>Contact us</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <footer class="py-5 bg-dark">

  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
</html>
