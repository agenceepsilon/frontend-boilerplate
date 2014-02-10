<?php
    $layout = (isset($_GET['layout'])) ? $_GET['layout'] : FALSE;
    $page   = (isset($_GET['page'])) ? $_GET['page'] : FALSE;
?>
<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="robots" content="all">
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meduseld Project.</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <?php include("assets/files-header.php"); ?>
</head>
<body>
<?php
    // HEADER - En fonction du header choisi
    if($layout && file_exists('layout/header-'.$layout.'.php')){
        include 'layouts/header-'.$layout.'.php';
    }
    else {
        include 'layouts/header.php';
    }

    // MAIN - Si le layout n'existe pas ou n'est pas appellé, on charge la page d'intégration
    if($layout && file_exists('layouts/layout-'.$layout.'.php')){
        include 'layouts/layout-'.$layout.'.php';
    }
    else {
        include 'pages/_integration.php';
    }

    // FOOTER - En fonction du footer choisi
    if($layout && file_exists('layout/footer-'.$layout.'.php')){
        include 'layouts/footer-'.$layout.'.php';
    }
    else {
        include 'layouts/footer.php';
    }

    // Chargement en dernier des JS
    include("assets/files-footer.php");
?>
</body>
</html>