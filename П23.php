<?php


$password = readline();
$enteredpassword= readline();


if ($password === $enteredpassword) {
   echo 'пароль принят';
} else { 
   echo 'пароль не принят';
}



echo "# task" >> README.md
git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Bagugan/task.git
git push -u origin main