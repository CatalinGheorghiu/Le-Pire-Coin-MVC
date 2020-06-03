<?php

/**
 * This is the base controller
 * This loads the model and views
 */

class Controller
{
    //Load model
    public function model($model)
    {
        //Require model file
        require_once '../app/models/' . $model . '.php';

        //Instantiate the model
        return new $model();
    }

    //Load view
    public function view($view, $data = [])
    {
        //Check for the view file
        if (file_exists('../app/views/' . $view . '.php')) {

            //Require view file
            require_once '../app/views/' . $view . '.php';
        } else {
            //The view doesn't exist
            die("View doesn't exist");
        }
    }
}
