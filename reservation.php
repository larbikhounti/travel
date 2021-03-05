<?php 
// author : mohamed khounti
session_start();

if(! isset($_SESSION["email"])){
  //  header("location : ..travel/")
}
include "./static/navbar.php";
include "./functions/dataset.php";
$connection = new dataset();
$result =  $connection->allReservations($_SESSION["email"]);
//print_r($result);
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
    <title>Trajets</title>
</head>

<body>
    <?php echo ($navBar); ?>


    <div class="table-of-times container text-center mt-5">
        <h1>Mon Reservations</h1>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    
                    <th scope="col">number bellit</th>
                    <th scope="col">code voyage</th>
                    <th scope="col">heure depart</th>
                    <th scope="col">heure arrivee</th>
                    <th scope="col">ville depart</th>
                    <th scope="col">ville arrivee</th>
                    <th scope="col">la date</th>
                    <th scope="col">prix</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($result as $key ) {
                echo " 
                <tr>
                    <th scope='row'>".$key["numbille"]."</th>
                    <td>".$key["codeVoyage"]."</td>
                    <td>".$key["heureDepart"]."</td>
                    <td>".$key["heureDarrivee"]."</td>
                    <td>".$key["villeDepart"]."</td>
                    <td>".$key["villeDarrivee"]."</td>
                    <td>".$key["datebilet"]."</td>
                    <td>".$key["prixVoyage"]." DH</td>
                   
                </tr>";
            }
            ?> 
             
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</body>

</html>