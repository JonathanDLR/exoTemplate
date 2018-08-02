<?php

require_once('controller/Controller.php');

$arrayView = ['frontend/view/Preloader.php','frontend/view/Navbar.php', 'frontend/view/Home.php',
 'frontend/view/Aboutme.php', 'frontend/view/Service.php' , 'frontend/view/Experiences.php',
 'frontend/view/Education.php', 'frontend/view/Testimonial.php', 'frontend/view/Contact.php',
 'frontend/view/Footer.php', 'frontend/common/script.php'];

 $arrayNameView = ['navbar', 'home', 'aboutme', 'service', 'experiences', 'education', 'testimonial',
'contact', 'footer'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
  include('frontend/common/Head.php');
  ?>

  <body>
    <?php

    $controller = new Controller(); // ON INSTANCIE LE CONTROLLEUR
    foreach($arrayNameView as $nameView) {
      ${'reponse'.$nameView} = $controller->sendText($nameView); // VARIABLE DYNAMIQUE APPELANT SENDTEXT
    }


    foreach($arrayView as $view) { // INCLUDE DES VIEWS
      include($view);
    }

    ?>

  </body>
</html>
