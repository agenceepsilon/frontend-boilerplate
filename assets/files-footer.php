<!-- JS libraries files -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery.notready/assets/js/jquery.ready.js"></script>

<!-- JS main file -->
<?php if($environment == "local"): ?>
    <script src="assets/js/main.js"></script>
<?php elseif($environment == "prod"): ?>
    <script src="assets/js/dist/build.min.js"></script>
<?php endif ?>