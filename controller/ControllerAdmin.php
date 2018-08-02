<?php


require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/backend/admin/AdminCoManager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/backend/TextManager.php');

class ControllerAdmin {
  public function sendAdmin() {  // RECUP ET CONTROLE LOGIN MDP TAPE PAR USER

    if (isset($_POST['submitAdmin'])) {

      $login =  htmlentities($_POST['login']); // HASH ET CONTROLE LOGIN MDP
      $mdp = htmlentities($_POST['mdp']);

      $AdminCoManager = new AdminCoManager();
      $reponse = $AdminCoManager->getAdmin(); // RECUP LOGIN MDP DE LA BDD
      $trueLogin = $reponse['login'];
      $trueMdp = $reponse['mdp'];

      if (empty($login)) { // SI LOGIN VIDE ON RENVOI VERS LA PAGE ERREUR
        echo 'Veuillez renseigner votre login!';
        require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/admin/AdminErreur.php');
        return;
      }

      else {
        $login = hash(sha1, $login); // ON HASH LE LOGIN

        if ($login != $trueLogin) { // SI LOGIN ERRONE ON RENVOI VERS LA PAGE ERREUR
          echo 'Login invalide!';
          require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/admin/AdminErreur.php');
          return;
        }
      }

      if (empty($mdp)) { // SI MDP VIDE ON RENVOI VERS LA PAGE ERREUR
        echo 'Veuillez renseigner votre mot de passe!';
        require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/admin/AdminErreur.php');
        return;
      }

      else {
        $mdp = hash(sha1, $mdp); // ON HASH LE MDP

        if ($mdp != $trueMdp) { // SI MDP ERRONE ON RENVOI VERS LA PAGE ERREUR
          echo 'Mot de passe invalide!';
          require($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/frontend/view/admin/AdminErreur.php');
          return;
        }
      }

      session_start(); // ON CREE UNE SESSION AVEC LOGIN ET MDP
      $_SESSION['login'] = $_POST['login'];
      $_SESSION ['mdp'] = $_POST['mdp'];
      header('Location: /jdlr/300718/Administration.php'); // RENVOI VERS LA PAGE ADMIN
    }
  }

  public function sendView() { // ENVOI DES TEXTES VENANT DE LA BDD AUX VIEWS
    if (isset($_POST['view'])) {
      $view = $_POST['view'];
      $textManager = new TextManager();
      $reponse = $textManager->getText($view); // ON RECUP LES TEXTS VENANT DE LA BDD
      echo JSON_encode($reponse);
    }
  }

  public function sendType() { // ENVOI DU CONTENU TAPE PAR USER
    if (isset($_POST['type'])) {
      $_POST['contenu'] = htmlentities($_POST['contenu'], ENT_QUOTES); // ECHAPPER CARAC SAUF <STRONG> <SMALL>
      $_POST['contenu'] = str_replace('&lt;strong&gt;','<strong>', $_POST['contenu']);
      $_POST['contenu'] = str_replace('&lt;/strong&gt;','</strong>', $_POST['contenu']);
      $_POST['contenu'] = str_replace('&lt;small&gt;','<small>', $_POST['contenu']);
      $_POST['contenu'] = str_replace('&lt;/small&gt;','</small>', $_POST['contenu']);
      $view = $_POST['view'];
      $type = $_POST['type'];
      $contenu = $_POST['contenu'];
      $adminTextManager = new AdminTextManager();
      $adminTextManager->updateText($contenu, $view, $type); // ON UP LE CONTENU DANS LA BDD
    }
  }
}
?>
