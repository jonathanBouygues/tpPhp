<?php

require_once __DIR__.'/../../../app/config/dbHandler.php';
require_once __DIR__.'/../Entity/article.php';


class ArticleRepository {
  private $_db;

  public function __construct() {
    $this->_db = dbHandler::getDb();
  }
  
  public function findAll($pseudoID) {
    $results = $this->_db->prepare("SELECT id,title, author, category, content FROM Article INNER JOIN User ON user_article = user_id WHERE user_pseudo = '$pseudoID' AND archive IS NULL");
    $results->execute();

    // Add bind param

    $articles_from_tables = $results->fetchAll();
    
    $articles = array();
    foreach ($articles_from_tables as $article) {
      $articles[] = new Article(
        $article['id'],
        $article['title'],
        $article['author'],
        $article['category'],
        $article['content']
      );
    }

    return $articles;
  }

  public function deleteArticle($valueDelID,$valueDelDate) {
    $results = $this->_db->prepare("UPDATE `article` SET `modifiedAt`= '$valueDelDate', `archive`= 'archive' WHERE `id` = '$valueDelID'");
    $results->execute();
  }

  public function modifyArticle($valueMod,$champsModify,$champsValue,$dateMod) {
    $results = $this->_db->prepare("UPDATE `article` SET $champsModify = '$champsValue', `modifiedAt`= '$dateMod' WHERE `id` = '$valueMod'");
    $results->execute();
  }

  public function newArticle($newTit,$newAut,$newCat,$newCon,$newCre,$newUser) {
    $results = $this->_db->prepare("INSERT INTO `article`(`title`, `author`, `category`, `createdAt`, `content`, `user_article`) VALUES ('$newTit','$newAut','$newCat','$newCre','$newCon','$newUser')");
    $results->execute();
  }
}