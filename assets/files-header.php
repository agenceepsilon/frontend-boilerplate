<!-- CSS files -->
<?php if(ENVIRONMENT == "local"): ?>
    <link rel="stylesheet" href="assets/css/style.css">
<?php elseif(ENVIRONMENT == "prod"): ?>
    <link rel="stylesheet" href="assets/css/dist/style.min.css">
<?php endif ?>

<!--[if lte IE 8]>
<?php if(ENVIRONMENT == "local"): ?>
    <link rel="stylesheet" href="assets/css/oldie.css">
<?php elseif(ENVIRONMENT == "prod"): ?>
    <link rel="stylesheet" href="assets/css/dist/oldie.min.css">
<?php endif ?>
<![endif]-->

<!-- JS files -->
<script src="bower_components/modernizr/modernizr.js"></script>
<script src="bower_components/jquery.notready/assets/js/jquery.notready.js"></script>