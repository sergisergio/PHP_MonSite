<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../ui/img/favicon.ico" />
        <title>Aide</title>
        <link href="../ui/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,700,600,500,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
        <link href="../ui/css/fontello.css" rel="stylesheet">
        <link href="../ui/css/budicons.css" rel="stylesheet">
        <link href="../ui/css/plugins.css" rel="stylesheet">
        <link href="../ui//css/prettify.css" rel="stylesheet">
        <link href="../ui/css/style.css" rel="stylesheet">
    </head>
    <body class="full-layout">
    <div class="body-wrapper">
        <?php include_once '../ui/fragments/nav.frg.html'; ?>
        <div class="container">
            <!-- Main content -->
            <h2>
                <?php echo $parameters['title']; ?>
            </h2>

            <h3>Principe de ce site</h3>
            <p>
                WePlayMusic.fr est un outil de gestion d'albums de musique en ligne.
            </p>

            <h4>Ajout d'un album</h4>
            <p>
                Pour ajouter un album, il faut remplir le formulaire correspondant
                en accédant à la page <a href="../admin/index.php?a=ajouter">Nouvel Album</a>. On associe une image à l'album,
                aux formats (jpg/png), un titre et un auteur. En cas d'échec, des messages
                d'erreurs expliciteront la raison de l'échec.
            </p>

            <h4>Upload des musiques</h4>
            <p>
                L'album créé, vous pouvez soit uploader directement des pistes,
                soit par accès à la page <a href="../admin/index.php">Gestion des Albums</a>. Actuellement, l'application
                ne gère que le format mp3, mais il est prévu que le format ogg soit également géré.
                Une musique contient donc un fichier mp3, on doit également lui associer un titre.
            </p>
            <p>
                <span class="label label-info">En cas d'échec, lisez les messages d'erreur avant de contacter un administrateur</span>
            </p>

            <h4>Gestion générale</h4>
            <p>
                Toutes les actions d'administration de vos albums se fait au niveau de la page
                <a href="../admin/index.php">Gestion des albums</a>, que ce soit la modification ou la suppression des albums.
                L'administration des pistes d'un album se fait au sein de cet album (ajout/modification/suppression).
                Une fenêtre de confirmation pour les opérations de suppression a été mise en place, pour pallier aux erreurs de manipulation.
            </p>

            <h4>Affichage des albums</h4>
            <p>
                En page d'accueil, on peut accéder à l'ensemble des albums.
                Il y a actuellement 2 modes de visualisation de votre <a href="../public/index.php">Musithèque</a>:
            </p>
                <ul>
                    <li>Un Mode découverte: Liste des derniers albums ajoutés sous forme de slider</li>
                    <li>Un Mode classique: Liste de tous les albums ajoutés sous forme de tableau</li>
                </ul>
            <p>
                <span class="label label-info">En mode découverte, on accède à la lecture des albums en cliquant sur la vignette.</span>
            </p>
        </div>
    </div>

        <script src="../ui/js/jquery.min.js"></script>
        <script src="../ui/js/bootstrap.min.js"></script>
        <script src="../ui/js/jquery.themepunch.tools.min.js"></script>
        <script src="../ui/js/classie.js"></script>
        <script src="../ui/js/plugins.js"></script>
        <script src="../ui/js/scripts.js"></script>
        <script>
        $.backstretch(["../ui/img/react2.png"]);
        </script>

        <!-- Footer -->
        <?php include_once '../ui/fragments/footer.frg.html'; ?>
    </body>
</html>
