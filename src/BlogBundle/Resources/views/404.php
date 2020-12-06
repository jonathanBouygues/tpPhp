<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/favicon.png" type="image/png">
    <title>Page 404</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/dyna404.js" defer></script>
</head>
<body>
    <!-- header -->
    <?php include('../src/BlogBundle/Resources/views/header.php'); ?>
    
    <main class="container404">
        <h1>PAGE 404</h1>

        <p class="textRed">vous allez automatiquement être redirigé sur la page admin dans <span id="timing">10</span> secondes</p>

        <form id="action404" action="index.php" method="get">
            <input type="hidden" name="page" value="accueil">
        </form>

        <figure>
            <blockquote cite="https://www.commentcamarche.net/faq/38901-erreur-404-c-est-quoi">
                <span>Erreur 404 - C'est quoi ?</span>
                <p>Lorsqu'on navigue sur Internet, il arrive parfois qu'une page soit blanche et affiche ce message : erreur 404 ou 404 file not found (fichier non trouvé). Ce code est un message indiquant une erreur qui est renvoyé par un serveur HTTP. Globalement, cela veut dire que la page demandée n'existe pas.
                Il est aussi possible que ce code soit utilisé pour autre chose que pour son sens initial par exemple, lorsqu'on veut censurer une page. Le premier 4 indique une mauvaise adresse tandis que le dernier 4 signale le problème induit par la mauvaise URL.
                Cette page non trouvée ne sera donc pas explorée ni indexée par les moteurs de recherche. Lorsqu'une personne possède un site internet et qu'il existe une erreur 404, il est vivement conseillé de réparer cette erreur car Googlebot va retarder l'exploration du site ainsi que la fréquence des visites.</p>
            </blockquote>
            <cite>Source : commentçamarche.net</cite>
        </figure>
    </main>

    <!-- footer -->
    <?php 
        include('../src/BlogBundle/Resources/views/footer.php'); 
    ?>
</body>
</html>