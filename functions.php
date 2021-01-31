<?php

function sumTwoNumbers($number1, $number2){
    return $number1+$number2;
}

function multTwoNumbers($number1, $number2){
    return $number1*$number2;
}

function divTwoNumbers($number1, $number2){
    return $number1/$number2;
}

function calculate($number1, $number2, $operation){
    switch ($operation){
        case "sum":
            sumTwoNumbers($number1, $number2);
            break;
        case "mult":
            multTwoNumbers($number1, $number2);
            break;
        case "div":
            divTwoNumbers($number1, $number2);
            break;
    }
}