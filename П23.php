<?php


$password = readline();
$enteredpassword= readline();


if ($password === $enteredpassword) {
   echo 'пароль принят';
} else { 
   echo 'пароль не принят';
}