<?php
    // INT to DEV
    // Layout: H.P.
?>

<section id="wrapper">
    <div class="container l-hp">
        <section class="main-content">
            <?php
                foreach ($modules['main'] as $module) {
                    if (file_exists('components/modules/'.$module.'.php')) {
                        include('components/modules/'.$module.'.php');
                    }
                }
            ?>
        </section>
    </div>
</section>