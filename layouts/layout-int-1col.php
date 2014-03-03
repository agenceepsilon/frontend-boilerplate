<?php
    // INT to DEV
    // Layout : Intérieur
    // Colonne : 1 colonne
    // Option :

    // Chargement de la page des modules
    include 'pages/'.$page.'.php';
?>
<section id="wrapper">
    <div class="container l-col-1 clearfix">
        <section class="l-col main-content">
            <?php
                foreach($modules[1] as $module){
                    if(file_exists('pages/modules/'.$module.'.php')){
                        include('pages/modules/'.$module.'.php');
                    }
                }
            ?>
        </section>
    </div>
</section>