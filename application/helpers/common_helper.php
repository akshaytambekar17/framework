<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function pr($arr)
{
    if(!empty($arr)){
        echo "<pre>";
        print_r($arr);
    }
}
function includes($data){
    $ci=& get_instance();
    $ci->load->view('backend/include/header',$data);
    $ci->load->view('backend/include/sidebar',$data);
}
