<?php

class Bdd {
  private $_db;
  private $_dns;
  private $_user;
  private $_mdp;
  public function connect() {
    $this->setDb(new PDO($this->getDns(), $this->getUser(), $this->getMdp()));
  }
  public function setDb($db) {
    $this->_db = $db;
  }
  public function setDns($dns) {
    $this->_dns = $dns;
  }
  public function setUser($user) {
    $this->_user = $user;
  }
  public function setMdp($mdp) {
    $this->_mdp = $mdp;
  }
  public function getDb() {
    return $this->_db;
  }
  public function getDns() {
    return $this->_dns;
  }
  public function getUser() {
    return $this->_user;
  }
  public function getMdp() {
    return $this->_mdp;
  }
}
?>
