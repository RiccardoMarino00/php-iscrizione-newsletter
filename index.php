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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    include __DIR__. '/partials/header.php';
    ?>
    <main class= "main-sec">
        <div class="contenitore-main container-md">
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
    <?php
    include __DIR__. '/partials/footer.php'
    ?>
</body>
</html>


<style>

    .input-email{
        border: 2px solid lightblue;
        border-radius: 5px;
    }


    .contenitore-main{
        text-align: center;
    }

    .row{
        display: flex;

    }

    ul,
    li,
    ol,
    menu{
        list-style: none;
    }




    body{
        background-color: #FFB266;
        font-family: arial;
    }

    .contenitore{
        
    }

    .riga-header{
        justify-content: space-between;
        text-align: center;
    }


    .social{
        text-align:center;
        margin-left: 90px;
        margin-top: 4%;

    }
 

    .footer-container{
        justify-content: space-between;
        text-align:center;

    }

    a{
        text-decoration: none;
        color: currentcolor;
    }

    footer{
        margin-top: 50px
    }

    main{
        margin-top: 50px;
    }


</style>