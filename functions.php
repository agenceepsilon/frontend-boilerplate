<?php
    // ========================================================================================= //
    //                                      CONFIGURATIONS                                       //
    // ========================================================================================= //

    // ----------------------------------------------------------------------------------------- //
    // Choose your working environment for loading CSS and JS files.
    // - local => Files not minified
    // - prod  => Minified files
    // ----------------------------------------------------------------------------------------- //

    define('ENVIRONMENT', 'local');

    // ----------------------------------------------------------------------------------------- //
    // Get assets version
    // ----------------------------------------------------------------------------------------- //

    define('ASSETS_VERSION', file_get_contents('assets/.version'));

    // ----------------------------------------------------------------------------------------- //
    // Define CSS assets
    // ----------------------------------------------------------------------------------------- //

    define('ASSETS_CSS', 'assets/css');

    // ----------------------------------------------------------------------------------------- //
    // Define JavaScript assets
    // ----------------------------------------------------------------------------------------- //

    define('ASSETS_JAVASCRIPT', 'assets/js');

    // ----------------------------------------------------------------------------------------- //
    // Define assets vendor
    // ----------------------------------------------------------------------------------------- //

    define("ASSETS_VENDOR", 'assets/vendor');

    // ----------------------------------------------------------------------------------------- //
    // Get URL variables parameters
    // - $layout => get "layout" name
    // - $page   => get "page" name
    // - $error  => get "error" parameter
    // ----------------------------------------------------------------------------------------- //

    $layout = (isset($_GET['layout'])) ? $_GET['layout'] : FALSE;
    $page   = (isset($_GET['page'])) ? $_GET['page'] : FALSE;
    $error  = (isset($_GET['error'])) ? $_GET['error'] : FALSE;

    // ----------------------------------------------------------------------------------------- //
    // Load page modules
    // ----------------------------------------------------------------------------------------- //

    if(isset($page) && $page == TRUE){
        include 'pages/'.$page.'.php';
    }

    // ----------------------------------------------------------------------------------------- //
    // Define error class
    // ----------------------------------------------------------------------------------------- //

    if(isset($error) && $error == TRUE){
        define('ERROR_CLASS', ' has-error');
    }

    // ========================================================================================= //
    //                                         FUNCTIONS                                         //
    // ========================================================================================= //

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
    function lipsum($minLenght = 5, $maxLenght = 50, $type = 'words', $lorem = TRUE){
        $lenght = mt_rand($minLenght, $maxLenght);
        $url    = "http://www.lipsum.com/feed/xml?amount=$lenght&what=$type&start=".($lorem ? '0' : '1');

        return simplexml_load_file($url)->lipsum;
    }