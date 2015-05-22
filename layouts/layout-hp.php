<?php
    // INT to DEV
    // Layout: H.P.
?>

<section id="wrapper">
    <div class="container l-hp clearfix">
        <section class="main-content l-col">
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