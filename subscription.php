<?php

$email = $_POST['email'] ?? null;
include  __DIR__. '/partials/utilities.php';

$email_controllata = checkEmail($email) ?? null;

// var_dump($email_controllata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-md">
    <?php
        if ($email_controllata === true){
                        ?>
                        <div class="alert alert-success" role="alert">
                          Accesso consentito!
                        </div>
                        <?php
                    } elseif ($email_controllata === false && $email != '')  {
                        ?>
                        <div class="alert alert-danger" role="alert" >
                          Accesso negato!
                        </div>
                        <?php
                    };
                    ?>
</div>
</body>
</html>


<style>
    .contenitore-main{
        text-align: center;
    }

    body{
        background-color: #FFB266;
        height: 100vh;
        position: relative;

    }

    .alert{
        text-align:center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }
</style>