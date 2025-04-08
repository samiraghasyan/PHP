<?php



// Before PHP 8
$numbers = [1, 2, 3];
$squared = array_map(function($n) { return $n * $n; }, $numbers);

// In PHP 8  with arrow function
$squared = array_map(fn($n) => $n * $n, $numbers);