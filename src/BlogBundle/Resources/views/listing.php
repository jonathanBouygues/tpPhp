<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <title>Listing</title>

    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>

    <!-- header -->
    <?php include('../src/BlogBundle/Resources/views/header.php'); ?>

    <!-- main -->
    <div class="wrapper">

      <div class="articles">
      <?php foreach ($testBeta['articles'] as $article): ?>
        <article>
          <h1><?= $article->getTitle() ?></h1>
          <div class="meta-data">
            <span class="author">Auteur: <?= $article->getAuthor() ?></span> -
            <span class="category">Catégorie: <?= $article->getCategory() ?></span> -
            <span class="creation-date">Date: <?= $article->getCreatedAt() ?></span>
          </div>
          <p><?= $article->getContent() ?></p>
        </article>
      <?php endforeach; ?>
      </div>
    
    </div>
    
    <script src="/js/nav.js"></script>
  </body>
</html>