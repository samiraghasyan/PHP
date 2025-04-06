<?php

// In before php 8

/**
 * @param int|float $price
 */
function setPrice($price){
    //..
}


// In after php 8

function setPrice2(int|float $price):void{
    //..
}

