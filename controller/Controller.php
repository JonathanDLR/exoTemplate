<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/backend/TextManager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/backend/ImageManager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/backend/FormulaireManager.php');

class Controller {

  public function sendText($view) { // ENVOI DES TEXTES VENANT DE LA BDD AUX VIEWS
    $textManager = new TextManager();
    $reponse = $textManager->getText($view); // ON RECUP LES TEXTS VENANT DE LA BDD

    return $reponse;
  }

  public function sendImg($view) { // ENVOI DES IMGS VENANT DE LA BDD AU CSS
    $imageManager = new ImageManager();
    $img = $imageManager->getImg($view); // ON RECUP LES IMGS VENANT DE LA BDD

    return $img;
  }

  public function getForm() { // RECUP ET CONTROLE DES CHAMPS DU FORMULAIRE

    if (isset($_POST['submit'])) {
      $name = htmlentities($_POST['fullname']);
      $mail = htmlentities($_POST['email']);
      $msg = htmlentities($_POST['message']);

      if (empty($name)) { // VERIF SI NOM REMPLI
        echo 'Veuillez rentrer votre nom!';
        require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/Erreur.php');
        return;
      }

      if (!is_string($name)) { // VERIF SI NOM = STRING
        echo 'Votre nom doit être une chaine de caractères!';
        require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/Erreur.php');
        return;
      }

      if (empty($mail)) { // VERIF SI MAIL REMPLI
        echo 'Veuillez rentrer votre mail!';
        require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/Erreur.php');
        return;
      }

       if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) { // VERIF SI MAIL VALIDE
         echo 'Votre mail n\'est pas valide';
         require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/Erreur.php');
         return;
       }

       if (empty($msg)) { // VERIF SI MSG REMPLI
         echo 'Veuillez rentrer votre message!';
         require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/Erreur.php');
         return;
       }

       if (!is_string($msg)) { // VERIF SI MSG = STRING
         echo 'Votre message doit être une chaine de caractères!';
         require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/Erreur.php');
         return;
       }
      $formulaireManager = new FormulaireManager();
      $formulaireManager->sendForm($name, $mail, $msg); // ON ENVOI LES DONNEES A LA BDD
      require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/Confirmation.php');
    }
  }
}

?>
