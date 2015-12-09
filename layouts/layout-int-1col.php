<?php
    // INT to DEV
    // Layout: Inside
    // Column: 1 column
?>

<section id="wrapper">
    <div class="container l-1col l-inside">
        <section class="main-content">
            <?php
                foreach ($modules['main'] as $module) {
                    if (file_exists('components/modules/'.$module.'.php')) {
                        include 'components/modules/'.$module.'.php';
                    }
                }
            ?>
        </section>
    </div>
</section>