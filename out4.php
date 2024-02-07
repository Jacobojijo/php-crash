<?php
    //conditions
    // $age = 9;
    // if ($age >= 18) {
    //     echo 'You are old enough to vote';
    // } else {
    //     echo 'You are not old enough to vote';
    // }
    // $t = date("H");
    // echo $t;
    // if (true) {
    //     echo 123;
    // }
    // $posts = ["Hello"];
    // // if (!empty($posts)) {
    // //     echo $posts[1];
    // // } else {
    // //     echo 'No post';
    // // }
    // $firstpost = !empty($posts[0]) ?? 'No post available';
    // echo $firstpost;
    $favcolor = 'red';

    switch($favcolor) {
        case 'red':
            echo 'Your favurite color is red';
            break;
        case 'blue':
            echo 'Your favourite color is blue';
            break;
        default: 'Your favourite color is neither blue nor red';
    }