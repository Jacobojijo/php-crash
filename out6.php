<?php
    function registerUser($email) {
        echo 'The user is registered at using the name '.$email;
    }
    registerUser('luigi');
    $sum = function($n1, $n2) {
        return '<br>'.$n1+$n2.'<br>';
    };
    echo $sum(10,15);
    $multiplication = fn($n1,$n2) => $n1*$n2;
    echo $multiplication(2,30);