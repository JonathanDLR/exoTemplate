<?php
session_start();

  if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) { // SI LES VARIABLES DE SESSION EXISTENT

  require_once('controller/ControllerAdmin.php');
  $arrayNameView = ['navbar', 'home', 'aboutme', 'service', 'experiences', 'education', 'testimonial',
  'contact', 'footer'];
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <?php
  include($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/common/Head.php');
  ?>
    <body>
      <div id="menuAdmin">
        <?php
        foreach($arrayNameView as $nameView) { // BOUCLE CREATION DES BOUTONS VUES
          echo '<button id=BUT'.$nameView.' name='.$nameView.'>'.$nameView.'</button>';
        }
        ?>
      </div>
      <div id="formAdmin">

      </div>


      <!-- BOUTON LOGOUT -->

      <form id="FORMlogout" action="backend/admin/Logout.php" method="post">
        <input id="logout" name="logout" type="submit" value="LOGOUT" />
      </form>
      <button class="BUTaccueil">ACCUEIL</button>
      <?php
      include($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/common/script.php');
      ?>
    </body>
  </html>
<?php
} else { // SI LES VARIABLES DE SESSION EXISTENT PAS ON RENVOI UNE 403
  header("HTTP/1.1 403 Forbidden");
  exit;
}
?>
