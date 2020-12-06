<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/favicon.png" type="image/png">
    <title>Mon listing - Listing</title>
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
            <span class="category">Catégorie : <?= $article->getCategory() ?></span> -
            <span class="creation-date">Date de création : <?= $article->getCreatedAt() ?></span>
          </div>
          <p>Description : <?= $article->getContent() ?></p>
        </article>
      <?php endforeach; ?>
      </div>
    
    </main>

    <!-- footer -->
    <?php 
        include('../src/BlogBundle/Resources/views/footer.php'); 
    ?>

  </body>
</html>