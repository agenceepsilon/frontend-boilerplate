<?php
    // INT to DEV
    // Layout : Intérieur
    // Colonne : 2 colonnes - Left
    // Option :
?>
<section id="wrapper">
    <div class="container l-col-2-l clearfix">
        <section class="l-col main-content">
            <?php include 'pages/'.$page.'.php'; ?>
        </section>
        <aside class="l-col col-left">
            Col left...
            <?php if($page && file_exists('pages/'.$page.'-col-left.php')){
                include 'pages/'.$page.'-col-left.php';
            } ?>
        </aside>
    </div>
</section>