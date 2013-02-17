<?php
function GenRandomString($length = 10)
{
$characters = "0123456789ABCDEF";
$string = "";
for ($p = 0; $p < $length; $p++) {
$string .= $characters[mt_rand(0,15)];
}
return $string;
}
 
$_licenseContainer = array();
 
 
/**
* ###############################################
* MODIFY LICENSE DETAILS HERE
* ###############################################
*/
 
$_licenseContainer['expiry'] = strtotime("2050-12-31 23:59:59");
$_licenseContainer['fullname'] = "vBulletin Designers & Developers";
$_licenseContainer['product'] = "Fusion";
$_licenseContainer['licensedstaff'] = 0;
$_licenseContainer['domains']['0'] = "localhost";
$_licenseContainer['domains']['1'] = "http://www.vbdesigners.com";
$_licenseContainer['domains']['2'] = "vbdesigners.com";
$_licenseContainer['domains']['3'] = "www.vbdesigners.com";
$_licenseContainer['package'] = "Fusion";
$_licenseContainer['organization'] = "Unreleased";
$_licenseContainer['uniqueid'] = GenRandomString(32);
$_licenseContainer['istrial']['0'] = 0;
 
// | md5_base64 | md5_decrypted | extended key | base64_data |
 

