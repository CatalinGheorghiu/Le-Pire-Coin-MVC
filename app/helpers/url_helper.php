<?php
//Simple page redirect
function redirect($location)
{
    header("Location: " . URL_ROOT . "/" . $location . "");
}
