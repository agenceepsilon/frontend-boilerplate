<?php
    // INT to DEV
    // Layout : Intérieur
    // Colonne : 1 colonne

    // Chargement de la page des modules
    include 'pages/'.$page.'.php';
?>
<section id="wrapper">
    <div class="container l-1col clearfix">
        <section class="main-content l-col">
            <?php
                foreach($modules['main'] as $module){
                    if(file_exists('components/modules/'.$module.'.php')){
                        include('components/modules/'.$module.'.php');
                    }
                }
            ?>
        </section>
    </div>
</section>