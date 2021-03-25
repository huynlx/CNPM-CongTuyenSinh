<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Class dealing with errors as exceptions
 */
class MY_Exceptions extends CI_Exceptions
{
    function show_error($heading, $message, $template = 'error_general', $status_code = 500)
    {
        log_message( 'debug', print_r( $message, TRUE ) );
        throw new Exception(is_array($message) ? $message[1] : $message, $status_code );
    }
}

/**
 * Captured error from Code Igniter
 */
class CiError extends Exception
{

}