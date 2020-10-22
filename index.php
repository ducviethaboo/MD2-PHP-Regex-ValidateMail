<?php

function checkEmail($str) {
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if(preg_match($pattern,$str)) {
        echo "Hop le";
    } else {
        echo " Khong hop le";
    }
}

checkEmail("abc@cac.abcd");