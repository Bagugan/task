<?php


$a = readline();
$b = readline();
$c = readline();
$first = ($a-$b);
$second = ($b-$c);


if ( $first === $second) {
   echo 'является';
} else { 
   echo 'не является';
}