<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/backend/Manager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/controller/ControllerAdmin.php');

class AdminTextManager extends Manager {

  public function updateText($contenu, $view, $type) { // MAJ DU CONTENU
    $req = $this->_connexion->getDb()->prepare('UPDATE texte SET contenu = :contenu WHERE name_view = :name_view AND type = :type');
    $req->bindParam('contenu', $contenu);
    $req->bindParam('name_view', $view);
    $req->bindParam('type', $type);
    $req->execute();
  }
}

$controllerAdmin = new ControllerAdmin();
$controllerAdmin->sendType(); // ENVOI DU CONTENU TAPE PAR USER
?>
