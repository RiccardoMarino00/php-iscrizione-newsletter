<?php
function checkEmail($email){

$checkedEmail = str_contains($email, '@') ?? '';
var_dump($checkedEmail);
$checkedDotEmail = str_contains($email, '.') ?? '';
var_dump($checkedDotEmail);
if ($checkedEmail === true && $checkedDotEmail === true){
    return true;
} else {
    return false;
}

};