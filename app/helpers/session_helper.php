<?php
session_start();

//Flash message
function flash($name = '', $message = '', $class = 'bg-green-200 border-l-4 border-green-500 text-green-700 p-4 text-center mx-1')
{
    if (!empty($name)) {
        if (!empty($message) && empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }

            if (!empty($_SESSION[$name . '_class'])) {
                unset($_SESSION[$name . '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } elseif (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo '<div class="' . $class . '" id="msg-flash" role="alert">' . $_SESSION[$name] . '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}

function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}
