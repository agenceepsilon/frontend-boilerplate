<?php
    // INT to DEV
    // Layout : Intérieur
    // Colonne : 3 colonnes
    // Option :
?>
<section id="wrapper">
    <div class="container l-col-3 clearfix">
        <section class="l-col main-content">
            <?php include 'pages/'.$page.'.php'; ?>
        </section>
        <aside class="l-col col-left">
            Col left...
            <?php if($page && file_exists('pages/'.$page.'-col-left.php')){
                include 'pages/'.$page.'-col-left.php';
            } ?>
        </aside>
        <aside class="l-col col-right">
            Col right...
            <?php if($page && file_exists('pages/'.$page.'-col-right.php')){
                include 'pages/'.$page.'-col-right.php';
            } ?>
        </aside>
    </div>
</section>