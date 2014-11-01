<?php if(ENVIRONMENT == "local"): ?>

    <!-- JS libraries files -->
    <script src="bower_components/jquery/dist/jquery.min.js?v=<?php echo ASSETS_VERSION ?>"></script>
    <script src="bower_components/jquery.notready/dist/jquery.ready.min.js?v=<?php echo ASSETS_VERSION ?>"></script>

    <!-- JS main file -->
    <script src="assets/js/main.js?v=<?php echo ASSETS_VERSION ?>"></script>

<?php elseif(ENVIRONMENT == "prod"): ?>

    <!-- JS libraries files -->
    <script src="assets/js/dist/bower.min.js?v=<?php echo ASSETS_VERSION ?>"></script>

    <!-- JS main file -->
    <script src="assets/js/dist/build.min.js?v=<?php echo ASSETS_VERSION ?>"></script>

<?php endif ?>