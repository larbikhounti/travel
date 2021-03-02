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
                <button class="btn btn-primary w-50" type="submit">Validé</button>
            </div>
        </div>



    </form>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</body>

</html>