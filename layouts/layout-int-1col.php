<?php
    // INT to DEV
    // Layout: Inside
    // Column: 1 column
?>

<section id="wrapper">
    <div class="l-1col container">
        <section class="main-content">
            <?php
                foreach ($modules['main'] as $module) {
                    if (file_exists('components/modules/' . $module . '.php')) {
                        include('components/modules/' . $module . '.php');
                    }
                }
            ?>
        </section>
    </div>
</section>
