<?php
    /**
     * Get $layout and $page params
     */
    $layout = (isset($_GET['layout'])) ? $_GET['layout'] : FALSE;
    $page   = (isset($_GET['page'])) ? $_GET['page'] : FALSE;

    /**
     * Generate Lorem Ipsum text
     *
     * @param int    $minLenght
     * @param int    $maxLenght
     * @param string $type (paras, words, bytes & lists)
     * @param bool   $lorem
     *
     * @return SimpleXMLElement[]
     */
    function lipsum($minLenght = 1, $maxLenght = 10, $type = 'words', $lorem = TRUE){
        $lenght = mt_rand($minLenght, $maxLenght);
        $url    = "http://www.lipsum.com/feed/xml?amount=$lenght&what=$type&start=".($lorem ? 'yes' : 'no');
        return simplexml_load_file($url)->lipsum;
    }