<?php
    // ============================================================================================= //
    //                                        CONFIGURATIONS                                         //
    // ============================================================================================= //

    // ------------------------------------------------------------------------- //
    // Choose your working environment for loading CSS and JS files.
    //  - local => Files not minified
    //  - prod  => Minified files
    // ------------------------------------------------------------------------- //

    define('ENVIRONMENT', 'local');

    // ------------------------------------------------------------------------- //
    // Define CSS assets
    // ------------------------------------------------------------------------- //

    define('ASSETS_CSS', 'assets-gulp/css');

    // ------------------------------------------------------------------------- //
    // Define JavaScript assets
    // ------------------------------------------------------------------------- //

    define('ASSETS_JAVASCRIPT', 'assets-gulp/js');

    // ------------------------------------------------------------------------- //
    // Define assets vendor
    // ------------------------------------------------------------------------- //

    define('ASSETS_VENDOR', 'assets/vendor');

    // ------------------------------------------------------------------------- //
    // Define error class
    // ------------------------------------------------------------------------- //

    define('ERROR_CLASS', 'has-error');

    // ------------------------------------------------------------------------- //
    // Get assets version
    // ------------------------------------------------------------------------- //

    define('ASSETS_VERSION', file_get_contents('assets/.version'));

    // ------------------------------------------------------------------------- //
    // URL variables parameters
    //  - $layout => Get layout name
    //  - $page   => Get page name
    //  - $error  => Get error parameter
    // ------------------------------------------------------------------------- //

    $layout = filter_input(INPUT_GET, 'layout');
    $page   = filter_input(INPUT_GET, 'page');
    $error  = filter_input(INPUT_GET, 'error');

    // ------------------------------------------------------------------------- //
    // Load page modules
    // ------------------------------------------------------------------------- //

    if (isset($page)) {
        include 'pages/'.$page.'.php';
    }

    // ============================================================================================= //
    //                                           FUNCTIONS                                           //
    // ============================================================================================= //

    /**
     * Generate Lorem Ipsum text
     *
     * @param int    $minLenght (5 words minimum)
     * @param int    $maxLenght
     * @param string $type (para, words, bytes & lists)
     * @param bool   $lorem (Choose to start with the text "Lorem ipsum...")
     *
     * @return SimpleXMLElement[]
     */
    function lipsum ($minLenght = 5, $maxLenght = 50, $type = 'words', $lorem = TRUE) {
        $lenght = mt_rand($minLenght, $maxLenght);
        $url    = "http://www.lipsum.com/feed/xml?amount=$lenght&what=$type&start=".($lorem ? '0' : '1');

        return simplexml_load_file($url)->lipsum;
    }