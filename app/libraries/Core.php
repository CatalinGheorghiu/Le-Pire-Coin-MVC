<?php

/**
 **  App core class
 **  Creates URL's and loads core controller
 **  URL FORMAT - /controller/method/params
 */

class Core
{
    protected $currentController = "Posts";
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct()
    {
        // var_dump($this->getUrl());
        $url = $this->getUrl();

        //Look in controllers for firs value
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            //if exists ,than set it as curent controller
            $this->currentController = ucwords($url[0]);

            //unset 0 Index
            unset($url[0]);
        };

        //Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        //Instantiate the controller class
        $this->currentController = new $this->currentController;

        //Check for second param of URL
        if (isset($url[1])) {
            //Check if the method exists in the controller
            if (method_exists($this->currentController, $url[1])) {
                //Set the current method
                $this->currentMethod = $url[1];

                //unset 1 index
                unset($url[1]);
            }
        }

        //Get params: if it has params, they are added to the array,else keep the array empty
        $this->params = $url ? array_values($url) : [];

        //Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    //* 
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            //remove last "/"
            $url = rtrim($_GET['url'], '/');

            //sanitize the url
            $url = filter_var($url, FILTER_SANITIZE_URL);

            //put the params in an array
            $url = explode('/', $url);
            return $url;
        };
    }
}
