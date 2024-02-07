<?php
    $numbers = [21,32,21];
    // print_r($numbers);
        // print_r($numbers[0]);
        // echo $numbers[1];

    // $fruits = [
    //     1 => 'apple',
    //     2 => 'orange',
    //     3 => 'pineapple'
    // ];

    // // print_r($fruits[3]);
    // print_r('Hello');
    $person = [
        'first_name' => 'Jacob',
        'second_name' => "Ojijo",
        'email' => "jacobojijo@gmail.com"
    ];
    // print_r($person['email']);
    // echo $person['first_name'];
    $people = [
        [
            'first_name' => 'Jacob',
            'second_name' => "Ojijo",
            'email' => "jacobojijo@gmail.com"
        ],
        [
            'first_name' => 'Mario',
            'second_name' => "yoshi",
            'email' => "luigi@gmail.com"
        ]
        ];
        echo $people[1]['second_name'];