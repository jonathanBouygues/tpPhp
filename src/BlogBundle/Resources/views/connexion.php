<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/favicon.png" type="image/png">
    <title>Connexion</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/dynaConnexion.js" defer></script>
</head>
<body>

    <h1>Connexion</h1>
    
    <main class="containerConnexion">
        <form class="formConnexion" action="index.php" method="get">
                <label for="">Pseudo</label>
                <input type="text" name="pseudo">
                <label for="">Mot de passe</label>
                <input type="password" name="password">
                <input type="hidden" name="page" value="accueil">
                <input type="submit" name="" id="">
        </form>

        <button id="actionNew">Nouvel user</button>

        <form class="formNewUser" action="index.php" method="get">
                <label for="">Nom</label>
                <input type="text" name="newNom">
                <label for="">Prénom</label>
                <input type="text" name="newPrenom">
                <label for="">Pseudo</label>
                <input type="text" name="newPseudo">
                <label for="">Mot de passe</label>
                <input type="text" name="newMdp">
                <input type="submit" value="Enregistrer">
        </form>
    </main>
    
</body>
</html>