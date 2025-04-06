<?php

$url = 'https://example.com';

if(str_starts_with($url, 'https')){
    echo 'safe(Https)';
}

if(str_ends_with($url, '.com')){
    echo 'Business domain';
}

