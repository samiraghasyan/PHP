<?php

// In before php 8

$statusCode = 200;

switch ($statusCode){
    case 200:
        $message = 'OK';
        break;
    case 404:
        $message = 'Not Found';
        break;
    default:
        $message = 'Unknown';
}
echo  $message;

// In after php 8

$message = match ($statusCode){
    200 => 'OK',
    404 => 'Not Found',
    default => 'Unknown',
};

echo  $message;