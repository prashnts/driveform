<?php
namespace DriveForm;

require 'config.php';
require 'APIProxy/spreadsheet.php';
require 'vendor/google-api-php-client/autoload.php';

# Routing Cases
$URI = preg_split('/[\/\?]/', preg_replace("/[\/]+/", "/", $_SERVER['REQUEST_URI']));
const BASE = 2;

switch(strtolower(isset($URI[BASE]) ? $URI[BASE] : False)) {
    case 'form':
        $spreadsheet = new APIProxy\Google\SpreadSheet(['CLIENT_ID' => "LOL", 'CLIENT_ECRET' => 'h']);

        break;
    default:
        echo "Serve Index File here.";
}
