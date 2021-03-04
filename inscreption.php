<?php
include "./static/navbar.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./css/acc.css">
    <link rel="stylesheet" href="./css/inscreption.css">
    <title>inscription</title>
</head>

<body>
    <?php echo ($navBar); ?>



    <form action="" method="post" class="sign-up-form container mt-5">
        <div class="fullname  col-md-12 container row ">
            <h1>inscreption</h1>
            <div class="name col-md-6 ">
                <label class="fw-bold" for="name">Nom</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="lastname col-md-6 ">
                <label class="fw-bold" for="lastname">prenom</label>
                <input class="form-control" type="text" name="lastname" id="lastname" required>
            </div>
        </div>
        <div class="dateob-tele col-md-12 container row">
            <div class="telefone col-md-6">
                <label class="fw-bold" for="phone">telephone</label>
                <input class="form-control" type="phone" name="phone" id="phone" required>
            </div>
            <div class="date_b col-md-6">
                <label class="fw-bold" for="date_b">date de necc</label>
                <input class="form-control date_b" type="date" name="date_b" id="date_b" required>
            </div>
        </div>
        </div>
        <div class="col-md-12 container  row">
            <div class="password col-md-6">
                <label class="fw-bold" for="password">mot de pass</label>
                <input class="form-control password" type="password" name="password" id="password" required>
            </div>
            <div class="email col-md-6">
                <label class="fw-bold" for="email">email</label>
                <input class="form-control email" type="email" name="email" id="email" required>
            </div>
        </div>
        <div class="col-md-12 container  row">
            <div class="password col-md-12 p-5 text-center">
                <button class="btn btn-primary w-50 submit" value="submit" type="submit">Validé</button>
            </div>
        </div>
    </form>

    <!-- Modal of sucess -->
    <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">message de inscription</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h3>enregistrement terminé avec succès</h3>
                    </div>
                </div>
                <div class="modal-footer text-center">

                    <button type="button" class="btn btn-success Connection ">Connection <i class="fas fa-sign-in-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal of sucess -->
     <div class="modal fade" id="faild" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">message de inscription</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h3>enregistrement echoué</h3>
                    </div>
                </div>
                <div class="modal-footer text-center">

                    <button type="button" class="btn btn-danger recommencez">recommencez <i class="fas fa-redo-alt"></i></button>
                </div>
            </div>
        </div>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    <script src="./js/inscreption.js"></script>
</body>

</html>