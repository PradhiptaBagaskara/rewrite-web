<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('alert'))
{
    function alert($condition, $msg)
    {
    	$var 		= '<div class="alert alert-'.$condition.' alert-dismissable" role="alert">';
    	$var 		.= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
    	$var 		.= $msg;
    	$var 		.= '</div>';
        return $var;
    }   
}