<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/backend/Manager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/controller/ControllerAdmin.php');

class AdminCoManager extends Manager { // RECUPERATION DU LOGIN MDP DEPUIS LA BDD

  public function getAdmin() {
    $req = $this->_connexion->getDb()->prepare('SELECT login, mdp FROM admin');
    $req->execute();

    $reponse = $req->fetch(PDO::FETCH_ASSOC);

    return $reponse;
  }
}

$controllerAdmin = new ControllerAdmin();
$controllerAdmin->sendAdmin(); // ENVOI DES LOGINS MDP TAPES PAR L'USER
?>
