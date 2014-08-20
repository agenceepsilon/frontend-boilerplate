<?php
    //------------------------------------------------------------------------------------------ //
    // Active BrowserSync code on footer
    //------------------------------------------------------------------------------------------ //
    $browserSync = TRUE;

    //------------------------------------------------------------------------------------------ //
    // Get $layout and $page params
    //------------------------------------------------------------------------------------------ //
    $layout = (isset($_GET['layout'])) ? $_GET['layout'] : FALSE;
    $page   = (isset($_GET['page'])) ? $_GET['page'] : FALSE;

    //------------------------------------------------------------------------------------------ //
    // Load $page modules
    //------------------------------------------------------------------------------------------ //
    if(isset($page) && $page == TRUE){
        include 'pages/'.$page.'.php';
    }

    //------------------------------------------------------------------------------------------ //
    // Find Browser Sync version
    //------------------------------------------------------------------------------------------ //
    $file_url  = "node_modules/grunt-browser-sync/package.json";
    $file_open = fopen($file_url, "r");
    $file_read = fread($file_open, filesize($file_url));
    fclose($file_open);
    $json = json_decode($file_read);
    $browserSync_version = $json->version;

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