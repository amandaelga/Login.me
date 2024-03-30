<?php 
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-Silvers
   | Template Name     : G-Silvers Landing Page
   | -------------------------------------------------------------------------------
   */
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
    /*
     |--------------------------------------------------------------------------
    | Website Theme Version
    |--------------------------------------------------------------------------
    */

 
    /*
    |--------------------------------------------------------------------------
    | Website Linkoffer,histats, url web wajib diganti
    |--------------------------------------------------------------------------
    */
$offer    = 'https://www.facebook.com/CpaLandingPages/'; // Untuk Link Offer Anda contoh //hlock.com/ref=345346
$idHistats    = '#'; // Untuk ID HISTATS Anda

   /* |--------------------------------------------------------------------------
    | DO NOT MODIFY OPTIONS BELOW. UNTIL YOU KNOW WHAT ARE YOU DOING.
    |--------------------------------------------------------------------------
    */
$url_web =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URL]/";

define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] );
