<?php
function checkEmail($email){

$checkedEmail = str_contains($email, '@') ?? null;
$checkedDotEmail = str_contains($email, '.') ?? null;
if ($checkedEmail === true && $checkedDotEmail === true){
    return true;
} else {
    return false;
}

};