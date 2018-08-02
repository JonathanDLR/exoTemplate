<?php

require_once('Manager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/300718/controller/Controller.php');

class FormulaireManager extends Manager { // ENVOI DES DONNEES DU FORMULAIRE A LA BDD
  public function sendForm($name, $mail, $msg) {
    $req = $this->_connexion->getDb()->prepare('INSERT INTO formulaire(name, mail, msg) VALUES (:name, :mail, :msg)');
    $req->bindParam('name', $name);
    $req->bindParam('mail', $mail);
    $req->bindParam('msg', $msg);
    $req->execute();
  }
}

$controller = new Controller();
$controller->getForm(); // ON RECUP LES DONNEES DU FORMULAIRE
?>
