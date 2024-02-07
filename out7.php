<?php
    // $count_value = count($fruits);
    // $searched = in_array('apple', $fruits);
    // $verify = var_export($searched);

    // print_r($count_value);
    // array_push($fruits, 'tangerine');
    // array_unshift($fruits, 'tangerine');
    // array_pop($fruits);
    // array_shift($fruits);
    // unset($fruits[2]);
    // echo in_array('apple',$fruits);

    // $arr1 = [1,2,3,4];
    // $arr2 = [4,5,6,7];

    // $arr3 = [...$arr1, ...$arr2];
    // print_r($arr3);

    // $a = ['green','red','blue'];
    // $b = ['kales', 'apple','pines'];

    // $c = array_combine($a,$b);
    // print_r($c);
    $numbers = range(1,20);

    $newNumbers = array_map(function($number) {
        return 'Number '.$number;
    }, $numbers);

    $even = array_filter($numbers, fn($number) => $number <= 10);
    print_r($even);