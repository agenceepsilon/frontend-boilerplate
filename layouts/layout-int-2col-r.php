<?php
    // INT to DEV
    // Layout : Intérieur
    // Colonne : 2 colonnes - Right
    // Option :
?>
<section id="wrapper">
    <div class="container l-spalte-2-r clearfix">
        <section class="l-col main-content">
            <?php include 'pages/'.$page.'.php'; ?>
        </section>
        <aside class="l-col col-right">
            Col right...
            <?php if($page && file_exists('pages/'.$page.'-col-right.php')){
                include 'pages/'.$page.'-col-right.php';
            } ?>
        </aside>
    </div>
</section>