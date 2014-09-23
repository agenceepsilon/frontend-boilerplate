<!-- JS libraries files -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery.notready/assets/js/jquery.ready.js"></script>

<!-- JS main file -->
<?php if($environment == "local"): ?>
    <script src="assets/js/main.js"></script>
<?php elseif($environment == "prod"): ?>
    <script src="assets/js/dist/build.min.js"></script>
<?php endif ?>

<!-- Grunt Browser Sync - NOT for the production -->
<?php if(isset($browserSync) && $browserSync == TRUE): ?>
    <script type='text/javascript'>
        //<![CDATA[
        document.write("<script async src='//HOST:3000/browser-sync-client.<?php echo $browserSync_version; ?>.js'><\/script>".replace(/HOST/g, location.hostname));
        //]]>
    </script>
<?php endif ?>