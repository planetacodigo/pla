<?php

namespace phpLiteAdmin;
use phpLiteAdmin\phpLiteAdminOptionsInterface;



class phpLiteAdmin extends phpLiteAdminOptionsInterface {

    public function __construct()
    {
        if (version_compare(phpversion(), '5.2.4', '<')) {
            die('Your PHP version is PHP '.phpversion().', which is too old. You need at least PHP 5.2.4.');
        }
        
        if(strpos(ini_get('variables_order'),'G') === false || strpos(ini_get('variables_order'),'P') === false ||
           strpos(ini_get('variables_order'),'C') === false || strpos(ini_get('variables_order'),'S') === false) {
            die('The php configuration <em>variables_order</em> needs to include G, P, C and S. The current value is "'.ini_get('variables_order').'". Please check the php configuration (php.ini).');
        }
        parent::__construct();
    }

    public function web() {

        $password = $this->getPassword();
        $directory = $this->getDirectory();
        $subdirectories = $this->getSubdirectories();
        $databases = $this->getDatabases();
        $theme = $this->getTheme();
        $language = $this->getLanguage();
        $rowsNum = $this->getRowsNum();
        $charsNum = $this->getCharsNum();
        $maxSavedQueries = $this->getMaxSavedQueries();
        $custom_functions = $this->custom_functions();
        $cookie_name = $this->getCookie_name();
        $debug = $this->getDebug();
        $allowed_extensions = $this->getAllowed_extensions();
        $hexblobs = $this->Hexblobs();

        //include_once("./index.php");

        # REMOVE_FROM_BUILD
        // include default configuration and language
        //include './phpliteadmin.config.sample.php';
        $d = dirname(__FILE__);
        define("ROOTPA", $d);
       
        include_once $d . "/languages/lang_en.php";
        define("LANG", $lang );
        define("DATABASES", $databases );

        /**
         * Start Code
         */
        
        include_once $d . "/index.php";
        /**
         * End Code
         */

        
    }


}