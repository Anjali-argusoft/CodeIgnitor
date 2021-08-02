<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Minifyhtml {

    /**
     * Responsible for sending final output to browser
     */

function output()
{
    $this->CI = &get_instance();
    $Output = $this->CI->output->get_output();
    echo '<br>This is final output adding sentence using hooks' . $Output . 'in Codeignitor';
}
}
?>