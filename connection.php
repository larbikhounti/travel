<?php 
// author : mohamed khounti
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
    <title>Document</title>
</head>

<body>
    <?php echo ($navBar); ?>

    <form action="" method="post" class="sign-up-form container mt-5">
        <div class="fullname  col-md-12 container  ">
            <h1>Connection</h1>
            <div class="col-md-12 container row">
                <div class="name col-md-6">
                    <label class="fw-bold" for="Email">email</label>
                    <input class="form-control" type="email" name="Email" id="Email" required>
                </div>
                <div class="lastname col-md-6">
                    <label class="fw-bold" for="password">mot de Pass</label>
                    <input class="form-control" type="password" name="password" id="password" required>
                </div>
            </div>
           
        </div>

        <div class="container row">
            <div class="submit col-md-6 p-4">
                <button class="btn btn-primary w-100" type="submit">Connection</button>
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