<?php


// var_dump($_POST);
// $email_controllata = checkEmail($email);
$email = $_POST['email'] ?? null;
include  __DIR__. '/partials/utilities.php';

$email_controllata = checkEmail($email) ?? null;

var_dump($email_controllata);







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Form News Letter</title>
</head>
<body>
    <main>
        <div class="contenitore">
            <div class="row">
                <div class="col">
                    <form action="" method="post" >
                        <input type="email" id="email" class="input-email" name="email">
                        <button  class="btn btn-outline-primary">INVIO</button>
                    </form>
                    <?php
                    if ($email_controllata === true){
                        ?>
                        <div class="alert alert-success" role="alert">
                          Accesso consentito!
                        </div>
                        <?php
                    } else  {
                        ?>
                        <div class="alert alert-danger" role="alert">
                          Accesso negato!
                        </div>
                        <?php
                    };
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>


<style>

    .input-email{
        border: 2px solid lightblue;
        border-radius: 5px;
    }


    .contenitore{
        text-align: center;
    }
</style>