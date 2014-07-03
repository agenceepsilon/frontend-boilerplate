<?php include("functions.php"); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="robots" content="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Front-End Boilerplate.</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <?php include("assets/files-header.php"); ?>
</head>
<body>
<?php
    /**
     * HEADER
     * Displays the correct "header" depending on the chosen.
     */
    if(file_exists('components/header-'.$layout.'.php')){
        include 'components/header-'.$layout.'.php';
    } else {
        include 'components/header.php';
    }

    /**
     * MAIN
     * If the layout does not or is not called there, it loads the "integration" page.
     */
    if(file_exists('layouts/layout-'.$layout.'.php')){
        include 'layouts/layout-'.$layout.'.php';
    } else {
        include 'pages/_integration.php';
    }

    /**
     * FOOTER
     * Displays the correct "footer" depending on the chosen.
     */
    if(file_exists('components/footer-'.$layout.'.php')){
        include 'components/footer-'.$layout.'.php';
    } else {
        include 'components/footer.php';
    }

    /**
     * JavaScript files
     */
    include("assets/files-footer.php");
?>
</body>
</html>