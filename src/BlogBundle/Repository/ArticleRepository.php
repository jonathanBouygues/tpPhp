<?php

require_once __DIR__.'/../../../app/config/DbHandler.php';
require_once __DIR__.'/../Entity/Article.php';

class ArticleRepository {
  private $_db;

  public function __construct() {
    $this->_db = DbHandler::getDb();
  }
  
  public function findAll() {
    $results = $this->_db->prepare("SELECT * FROM Article");
    $results->execute();

    $articles_from_tables = $results->fetchAll();
    
    $articles = array();
    foreach ($articles_from_tables as $article) {
      $articles[] = new Article(
        $article['title'],
        $article['author'],
        $article['category'],
        $article['content']
      );
    }

    return $articles;
  }
}