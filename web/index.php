<?php


// Start the session
session_start();

if(isset($_GET['pseudo'])) {
  $_SESSION['pseudo'] = $_GET['pseudo'];
}

// Integrate the listing of articles
require_once __DIR__.'/../src/BlogBundle/Repository/articleRepository.php';
require_once __DIR__.'/../src/BlogBundle/Repository/userRepository.php';


// Global controller
class MainController {

  private $path_of_views = "../src/BlogBundle/Resources/views";
  
  public function listingAction() {

    $articles = (new ArticleRepository())->findAll();

    $response = [
        'view' => $this->path_of_views."/listing.php",
        'articles' => $articles
    ];

    return $response;

  }

  public function accueilAction() {

    $response = [
      'view' => $this->path_of_views."/accueil.php"
    ];

    return $response;
  }

  public function adminAction() {

    $response = [
      'view' => $this->path_of_views."/admin.php"
    ];

    return $response;
  }

  public function connexionAction() {

    $response = [
      'view' => $this->path_of_views."/connexion.php"
    ];

    return $response;
  }

  public function defaultAction() {

    $response = [
      'view' => $this->path_of_views."/404.php"
    ];

    return $response;
  }

}


// Instanciation of the object
$action = new MainController();


// Create a new object and request to select
$users = (new UserRepository())->findAll();

$identity = "Bonjour ";
$statut = "KO ";

if (isset($_SESSION['pseudo'])) { 
  foreach($users as $user) {
    $temp = $user->getUserPseudo();
  
    if($temp === $_SESSION['pseudo']) {
      $identity = $identity.$_SESSION['pseudo'];
      $statut = "OK";
    } 
  }
}
  
// var_dump($_GET['page']);
// var_dump($statut);
// Switch on the data get in URL
if ($statut === "OK") {
  if ($_GET['page'] == 'admin') {
    $testBeta = $action->adminAction();
  } else if ($_GET['page'] == 'listing') {
    $testBeta = $action->listingAction();
  } else if ($_GET['page'] == 'accueil') {
    $testBeta = $action->accueilAction();
  } else {
    $testBeta = $action->defaultAction();    
  } 
} else {
  $testBeta = $action->connexionAction();
}

// Render the view
require_once $testBeta['view'];
