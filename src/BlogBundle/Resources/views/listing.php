<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <title>Listing</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body>

    <!-- header -->
    <?php include('../src/BlogBundle/Resources/views/header.php'); ?>

    <!-- main -->
    <main class="containerListing">

      <div class="articles">
      <?php foreach ($viewData['articles'] as $article): ?>
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
    
    </main>

    <!-- footer -->
    <?php 
        include('../src/BlogBundle/Resources/views/footer.php'); 
    ?>
    
    <script src="/js/nav.js"></script>
  </body>
</html>