<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/favicon.png" type="image/png">
    <title>Mon listing - Admin</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/dynaAdmin.js" defer></script>
</head>
<body>

    <!-- header -->
    <?php include('../src/BlogBundle/Resources/views/header.php'); ?>


    <!-- main -->
    <main class="containerAdmin">
        <h1>Administratif</h1>

        <div class="containerActionAdmin">
            <div class="containerNew">
                <h2>Nouvel article</h2>

                <form action="index.php" method="get">
                    <label for="">Title</label>
                    <input type="text" name="title" id="">
                    <label for="">Category</label>
                    <input type="text" name="category">
                    <label for="">Content</label>
                    <textarea name="content" cols="20" rows="5"></textarea>
                    <input type="hidden" name="page" value="admin">
                    <input type="submit" value="Enregistrer">
                </form>
            </div>

            <div class="containerModDel">
                <h2>Modifier/Supprimer</h2>

                <div id="containerButton">
                    <select name="" id="valueArticle">
                        <?php                    
                            foreach($viewData['articles'] as $article) {
                            $dataAdmin .= '<option value="'.$article->getID().'">'.$article->getTitle().'</option>';
                            }
                            echo $dataAdmin;
                        ?>
                    </select>
                    <div>
                        <form id="formDelArt" action="index.php" method="get">
                            <input type="hidden" name="valueDel" value="">
                            <input type="hidden" name="page" value="admin">
                            <input type="submit" value="Supprimer">
                        </form>
                        <div class="containerButMod">
                            <button id="actionMod">Modifier</button>
                        </div>
                        <form id="formModArt" action="index.php" method="get">
                            <select name="champsModify">
                                <option value="title">Titre</option>
                                <option value="category">Categorie</option>
                                <option value="createdAt">Date de création</option>
                                <option value="content">Description</option>
                            </select>
                            <input type="text" name="champsValue">
                            <input type="hidden" name="valueMod" value="">
                            <input type="hidden" name="page" value="admin">
                            <input type="submit" value="Modifier">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- footer -->
    <?php 
        include('../src/BlogBundle/Resources/views/footer.php'); 
    ?>


</body>
</html>