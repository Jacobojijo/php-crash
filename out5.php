<?php
    //loops
    // $total = 0;
    // while ($x <= 10) {
    //     $total += $x;
    //     $x++;
    // }
    // print_r($total);
    // $posts = ['First post', 'Second post', 'Third post'];

    // for($x = 0; $x < count($posts); $x++) {
    //     echo $posts[$x]. '<br>';
    // }
    // foreach($posts as $index => $post) {
    //     echo $index.'-'.$post. '<br>';
    
    $persons = [
        'first' => 'mario',
        'second' => 'luigi',
        'third' => 'yoshi'
    ];

    foreach($persons as $key => $person){
        echo $key.' - '.$person.'<br>';
    }
