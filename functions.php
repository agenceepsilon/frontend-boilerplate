<?php
    // ========================================================================================= //
    //                                      CONFIGURATIONS                                       //
    // ========================================================================================= //

    // ----------------------------------------------------------------------------------------- //
    // Choose your working environment for loading CSS and JS files.
    // - local => Files not minified
    // - prod  => Minified files
    // ----------------------------------------------------------------------------------------- //

    define("ENVIRONMENT", "local");

    // ----------------------------------------------------------------------------------------- //
    // Get assets version
    // ----------------------------------------------------------------------------------------- //

    define("ASSETS_VERSION", file_get_contents('assets/.version'));

    // ----------------------------------------------------------------------------------------- //
    // Get URL variables parameters
    // - $layout => get "layout" name
    // - $page   => get "page" name
    // ----------------------------------------------------------------------------------------- //

    $layout = (isset($_GET['layout'])) ? $_GET['layout'] : FALSE;
    $page   = (isset($_GET['page'])) ? $_GET['page'] : FALSE;

    // ----------------------------------------------------------------------------------------- //
    // Load page modules
    // ----------------------------------------------------------------------------------------- //

    if(isset($page) && $page == TRUE){
        include 'pages/'.$page.'.php';
    }

    // ========================================================================================= //
    //                                         FUNCTIONS                                         //
    // ========================================================================================= //

    /**
     * Generate Lorem Ipsum text
     *
     * @param int    $minLenght
     * @param int    $maxLenght
     * @param string $type (paras, words, bytes & lists)
     * @param bool   $lorem (Choose to start with the text "Lorem ipsum...")
     *
     * @return SimpleXMLElement[]
     */
    function lipsum($minLenght = 1, $maxLenght = 10, $type = 'words', $lorem = TRUE){
        $lenght = mt_rand($minLenght, $maxLenght);
        $url    = "http://www.lipsum.com/feed/xml?amount=$lenght&what=$type&start=".($lorem ? 'yes' : 'no');

        return simplexml_load_file($url)->lipsum;
    }