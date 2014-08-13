<!-- JS libraries files -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery.notready/assets/js/jquery.ready.js"></script>

<!-- JS main file -->
<script src="assets/js/main.js"></script>

<!-- Grunt Browser Sync - NOT for the production -->
<?php if(isset($browserSync) && $browserSync == TRUE): ?>
    <script type='text/javascript'>
        //<![CDATA[
        document.write("<script async src='//HOST:3000/browser-sync-client.1.3.5.js'><\/script>".replace(/HOST/g, location.hostname));
        //]]>
    </script>
<?php endif ?>