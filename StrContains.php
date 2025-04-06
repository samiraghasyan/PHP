<?php


// In before php 8

if (strpos('Hello world!','Hello') !== false){
    echo 'Found!';
}

// In after php 8

if(str_contains('Hello world!','Hello')){
    echo 'Found!';
}