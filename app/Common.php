<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter4.github.io/CodeIgniter4/
 */
function print_d($data){
    echo '<pre>';
    print_r($data);
    die();
}
function print_a($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function getSessionID()
{
    $sessionID =  session()->get('sessionID');
    if (!$sessionID) {
        if (function_exists('random_bytes')) {
            $sessionID = substr(bin2hex(random_bytes(26)), 0, 26);
        } else {
            $sessionID = substr(bin2hex(openssl_random_pseudo_bytes(26)), 0, 26);
        }
        session()->set('sessionID', $sessionID);
    }
    return $sessionID;
}