<?php require 'functions.php'; ?>
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
    <?php require 'assets/assets-header.php'; ?>
</head>
<body>
<?php
    /**
     * HEADER
     * Display the correct "header" depending on the chosen.
     */
    if (file_exists('components/header-'.$layout.'.php')) {
        require 'components/header-'.$layout.'.php';
    } else {
        require 'components/header.php';
    }

    /*
     * MAIN
     * If the layout does not or is not called there, it loads the "integration" page.
     */
    if (file_exists('layouts/layout-'.$layout.'.php')) {
        require 'layouts/layout-'.$layout.'.php';
    } else {
        require 'pages/_integration.php';
    }

    /*
     * FOOTER
     * Display the correct "footer" depending on the chosen.
     */
    if (file_exists('components/footer-'.$layout.'.php')) {
        require 'components/footer-'.$layout.'.php';
    } else {
        require 'components/footer.php';
    }

    /**
     * JavaScript files.
     */
    require 'assets/assets-footer.php';
?>
</body>
</html>
