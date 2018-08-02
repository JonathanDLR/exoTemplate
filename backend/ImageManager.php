<?php

require_once('Manager.php');

class ImageManager extends Manager {

  public function getImg($view) { // RECUP DES IMGS DE LA BDD
    $req = $this->_connexion->getDb()->prepare('SELECT img FROM image WHERE name_view = :name_view');
    $req->bindParam('name_view', $view);
    $req->execute();

    $reponse = $req->fetch(PDO::FETCH_ASSOC);

    return $reponse;
  }
}
