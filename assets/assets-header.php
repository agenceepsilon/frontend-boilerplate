<?php if (ENVIRONMENT == 'local'): ?>

    <!-- CSS files -->
    <link rel="stylesheet" href="<?php echo ASSETS_CSS ?>/style.css?v=<?php echo ASSETS_VERSION ?>">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo ASSETS_CSS ?>/oldie.css?v=<?php echo ASSETS_VERSION ?>">
    <![endif]-->

    <link rel="stylesheet" href="<?php echo ASSETS_CSS ?>/boilerplate.css?v=<?php echo ASSETS_VERSION ?>">

<?php elseif (ENVIRONMENT == 'prod'): ?>

    <!-- CSS files -->
    <link rel="stylesheet" href="<?php echo ASSETS_CSS ?>/style.min.css?v=<?php echo ASSETS_VERSION ?>">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo ASSETS_CSS ?>/oldie.min.css?v=<?php echo ASSETS_VERSION ?>">
    <![endif]-->

    <link rel="stylesheet" href="<?php echo ASSETS_CSS ?>/boilerplate.css?v=<?php echo ASSETS_VERSION ?>">

<?php endif ?>

<!-- JS files -->
<script src="<?php echo ASSETS_JAVASCRIPT ?>/vendor/modernizr.min.js?v=<?php echo ASSETS_VERSION ?>"></script>
