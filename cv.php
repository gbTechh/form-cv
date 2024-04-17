<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $date = $_POST["date"];
    $ocupacion = $_POST["ocupacion"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $nacionalidad = $_POST["nacionalidad"];
    $english_level = $_POST["english_level"];
    $languages = $_POST["languages"];
    $aptitud = $_POST["aptitud"];
    $habilidades = $_POST["habilidades"];
    $perfil = $_POST["perfil"];



    $errores = array();
    if (empty($name) || !is_string($name)) {
        $errores['name'] = "El campo nombre es obligatorio.";
    }
    if (empty($lastname) || !is_string($lastname)) {
        $errores['lastname'] = "El campo apellidos es obligatorio.";
    }
    if (empty($date)) {
        $errores['date'] = "El campo date es obligatorio.";
    }
    if (empty($ocupacion)) {
        $errores['ocupacion'] = "El campo ocupacion es obligatorio.";
    }
    if (empty($phone)) {
      $errores['phone'] = "El campo ocupacion es obligatorio.";
    }else{
      if(!ctype_digit($phone)){
        $errores['phone'] = "El teléfono debe ser un numero válido.";
      }
    }
    if (empty($email)) {
        $errores['email'] = "El campo email es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email ingresado no es válido.";
    }
    if (empty($perfil)) {
        $errores[] = "El campo mensaje es obligatorio.";
    }

    if(!empty($errores)){
      $_SESSION["errores"] = $errores;
      header("Location: index.php");
      exit;
    }
} else {   
    header("Location: index.php");
    exit;
}


?>

<?php require_once('./inc/header.php')?>



  <div class="container wrapper">
    <div class="content">
      <header class="header">
        <img class="img-banner" src="./assets/images/banner2.jpg"/> 
      </header>
      <main class="main">
        <div class="img-perfil">
          <div class="container">
            <div class="img-container">
              <img class="" src="./assets/images/perfil.jfif"/>
            </div>
            <div class="text">
              <div class="text-group">
                <h1 class="text-title capitalize">
                  <?php echo $name . ' ' . $lastname;?>
                </h1>
                <p><?php echo $ocupacion ? $ocupacion : '';?></p>
              </div>
              <div class="contact">
                <a href="https://github.com/gbTechh" target="__blink">
                  <img src="./assets/icons/github.svg"/>
                </a>
                <a href="https://www.linkedin.com/in/rodrigo-silva-murillo/" target="__blink">
                  <img src="./assets/icons/linkedin.svg"/>
                </a>
                <a href="mailto:dev.rsilva@gmail.com" target="__blink">
                  <img src="./assets/icons/sobre.svg"/>
                </a>
              </div>
            </div>
           
          </div>
        </div>
        <section class="section">         
          <div class="wrap-section width30">
            <div class="group">
              <h2 class="text-subtitle">Información</h2>
              <ul>
                <li class="text-body">Email: <?php echo $email;?></li>
                <li class="text-body">Teléfono: <?php echo $phone;?></li>
                <li class="text-body">Nacionalidad: <?php echo $nacionalidad;?></li>
                <li class="text-body">Fecha de nacimiento: <?php echo $date;?></li>
              </ul>
            </div>
            <div class="group">
              <h2 class="text-subtitle">Idiomas</h2>
              <ul>
                <li class="text-body">Español: Nativo</li>
                <li class="text-body capitalize">Ingles: <?php echo $english_level ?? 'No seleccionado';?></li>
              </ul>
            </div>
            <?php if(isset($languages)): ?>
              <div class="group">
                <h2 class="text-subtitle">Lenguajes</h2>
                <div>
                  <?php 
                    foreach ($languages as $item) { ?>
                      <span class="text-body badge capitalize"><?php echo $item;?></span>
                    <?php }
                  ?>
                  
                </div>
              </div>
            <?php endif; ?>

            <?php if(isset($habilidades)): ?>
              <div class="group">
                <h2 class="text-subtitle">Habilidades</h2>
                <ul>
                  <?php foreach ($habilidades as $item): ?>
                    <li class="text-body list"><?php echo $item; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
            
            <?php if(!empty($aptitud)): ?>
              <div class="group">
                <h2 class="text-subtitle">Aptitudes</h2>
                <ul>
                  <li class="text-body list"> <?php echo $aptitud?></li>              
                </ul>
              </div>  
            <?php endif; ?>    

          </div>
          <div class="wrap-section width70">
            <?php if(!empty($perfil)): ?>
            <h2 class="text-subtitle">Sobre mí</h2>
            <p class="text-body"><?php echo $perfil;?></p>
            <div class="dividerX mt-2 mb-2"></div>
            <?php endif; ?>  
      
          </div>  
        </section>
        <div class="footer">
          <p>2024 © todos los derechso reservados</p>
        </div>
      </main>
    </div>
  </div>
</body>
</html>