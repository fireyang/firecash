<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//stone.pei added. acl hook.
class Acl{

    function Acl()
    {
        //echo "yang222";
    }


    function hook_acl()
    {
        $CI =& get_instance();
        $b =  $CI->session->userdata("name"); 
        $CI->firephp->log("session:".$b);
        if($b =="fireyang")
        {
            //direct("blog")
        }
    }
}
?>
