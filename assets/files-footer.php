<?php if($environment == "local"): ?>

    <!-- JS libraries files -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/jquery.notready/assets/js/jquery.ready.js"></script>

    <!-- JS main file -->
    <script src="assets/js/main.js"></script>

<?php elseif($environment == "prod"): ?>

    <!-- JS libraries files -->
    <script src="assets/js/dist/bower.min.js"></script>

    <!-- JS main file -->
    <script src="assets/js/dist/build.min.js"></script>

<?php endif ?>