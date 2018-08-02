<?php

require_once('Manager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/controller/ControllerAdmin.php');

class TextManager extends Manager {

  public function getText($view) { // RECUP DES TEXTS DE LA BDD
    $req = $this->_connexion->getDb()->prepare('SELECT type, contenu FROM texte WHERE name_view = :name_view');
    $req->bindParam('name_view', $view);
    $req->execute();

    $reponse = $req->fetchAll(PDO::FETCH_ASSOC);

    $arrayReponse = [];

    foreach ($reponse as $key => $value) { // ON CREE UN NOUVEAU TABLEAU OU KEY = TYPE / VALUE = CONTENU
      $arrayReponse[$value["type"]] = $value["contenu"];
    }

    return $arrayReponse;
  }
}

$controllerAdmin = new ControllerAdmin();
$controllerAdmin->sendView(); // ENVOI DE LA VIEW CLIQUE PAR USER
?>
