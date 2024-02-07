<?php
    $name = 'Bradley';
    $age = 40;
    $has_kids=true;
    $cash_at_hand = 20.75;
    // echo "${name} is ${age} years old,";
    echo "  {$name} is an old man since he is about ${age} years old";

//   echo 5 * 6;
//   echo 4 / 2;
//   echo 10 % 2;

define('HOST', 'localhost');
define('DB_NAME', 'ojijo_db');

echo HOST .' ';
echo DB_NAME;