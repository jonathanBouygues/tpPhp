<?php

class User {
  private $_userID;
  private $_userNom;
  private $_userPrenom;
  private $_userPseudo;
  private $_userMdp;
  private $_userCreated;

  public function __construct(
    string $userID,
    string $userNom,
    string $userPrenom,
    string $userPseudo,
    string $userMdp,
    string $userCreated
  ) {
    $this->_userID = $userID;
    $this->_userNom = $userNom;
    $this->_userPrenom = $userPrenom;
    $this->_userPseudo = $userPseudo;
    $this->_userMdp = $userMdp;
    $this->_userCreated = $userCreated;
  }

  public function getUserID(): string { return $this->_userID; }
  public function getUserNom(): string { return $this->_userNom; }
  public function getUserPrenom(): string { return $this->_userPrenom; }
  public function getUserPseudo(): string { return $this->_userPseudo; }
  public function getUserMdp(): string { return $this->_userMdp; }
  public function getUserCreated(): string { return $this->_userCreated; }

}
