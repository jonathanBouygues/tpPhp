<?php
// Request traitement of article
if (isset($_GET['title'])) {
  $artTitle = $_GET['title'];
  $artAuthor = $_GET['author'];
  $artCategory = $_GET['category'];
  $artContent = $_GET['content'];
  $artDatCreate = date('Y-m-d');
  $action->newArticle($artTitle,$artAuthor,$artCategory,$artContent,$artDatCreate,$actualID);
} else if (isset($_GET['newNom'])) {
  $newNom = trim($_GET['newNom']);
  $newPrenom = trim($_GET['newPrenom']);
  $newPseudo = trim($_GET['newPseudo']);
  $newMdp = hash('sha256',trim($_GET['newMdp']));
  $newCreate = date('Y-m-d');
  $users->newUser($newNom, $newPrenom, $newPseudo, $newMdp, $newCreate);
} else if (isset($_GET['valueDel'])) {
  $valueDelID = trim($_GET['valueDel']);
  $valueDelDate = date('Y-m-d');
  $action->deleteArticle($valueDelID,$valueDelDate);
} else if (isset($_GET['valueMod'])) {
  $valueMod = trim($_GET['valueMod']);
  $champsModify = trim($_GET['champsModify']);
  $champsValue = trim($_GET['champsValue']);
  $dateMod = date('Y-m-d');
  $action->modifyArticle($valueMod, $champsModify, $champsValue,$dateMod);
}