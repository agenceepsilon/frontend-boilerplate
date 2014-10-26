<?php if(ENVIRONMENT == "local"): ?>

    <!-- CSS files -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo ASSETS_VERSION ?>">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="assets/css/oldie.css?v=<?php echo ASSETS_VERSION ?>">
    <![endif]-->

<?php elseif(ENVIRONMENT == "prod"): ?>

    <!-- CSS files -->
    <link rel="stylesheet" href="assets/css/dist/style.min.css?v=<?php echo ASSETS_VERSION ?>">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="assets/css/dist/oldie.min.css?v=<?php echo ASSETS_VERSION ?>">
    <![endif]-->

<?php endif ?>

<!-- JS files -->
<script src="bower_components/modernizr/modernizr.js?v=<?php echo ASSETS_VERSION ?>"></script>
<script src="bower_components/jquery.notready/assets/js/jquery.notready.js?v=<?php echo ASSETS_VERSION ?>"></script>