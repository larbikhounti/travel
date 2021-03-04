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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./css/acc.css">
    <title>Trajets</title>
</head>

<body>
    <?php echo ($navBar); ?>
    <form action="" method="post" class="travel-times-from container  mt-5">
        <div class="fullname col-md-12 container  ">
            <h1>Rechercher Trajets</h1>
            <div class="col-md-12 container row">
                <div class="Ville-Depart col-md-6">
                    <label class="fw-bold" for="Email">Ville Depart</label>
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="1">tanger</option>
                        <option value="2">meknes</option>
                        <option value="3">taza</option>
                    </select>
                </div>
                <div class="ville-arrive col-md-6">
                    <label class="fw-bold" for="password">Ville d'arrive</label>
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="1">casablanca</option>
                        <option value="2">rabat</option>
                        <option value="3">fes</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 container row">
                <div class="submit col-md-6 p-4">
                    <label for="date">Date De Voyage</label>
                    <input class="form-control" type="date" name="date" id="date" required>
                </div>
                <div class="submit col-md-6 p-5">
                    <button class="btn btn-primary w-100" type="submit">cherche</button>
                </div>
            </div>
        </div>

    </form>
    <div class="table-of-times container text-center">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th scope="col">code Voyage</th>
                    <th scope="col">heure depart</th>
                    <th scope="col">heure arrivee</th>
                    <th scope="col">ville depart</th>
                    <th scope="col">ville arrivee</th>
                    <th scope="col">prix</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>10:15</td>
                    <td>18:30</td>
                    <td>tanger</td>
                    <td>casablanca</td>
                    <td>155 DH</td>
                    <td><button class="btn btn-success btn-sm fw-bold w-100 reserver" data-toggle="modal"
                            data-target="#exampleModal">reserver</button></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>10:15</td>
                    <td>18:30</td>
                    <td>tanger</td>
                    <td>casablanca</td>
                    <td>155 DH</td>
                    <td><button class="btn btn-success btn-sm fw-bold w-100" data-toggle="modal"
                            data-target="#exampleModal">reserver</button></td>
                </tr>
            </tbody>
        </table>

    </div>


    <!-- Modal of reservation detail -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">reservation detail</h5>
                </div>
                <div class="modal-body">
                    <label for="numberofbillet" class="fw-900">Nombre De billet</label>
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary annuler" data-dismiss="modal">annuler</button>
                    <button type="button" class="btn btn-success pay">Payée</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal of credit card -->
    <div class="modal fade" id="card" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ajouter votre credit card</h5>
                </div>
                <div class="modal-body">

                    <div class="container columns" style="padding-left: 24px;">
                        <i class="fab fa-cc-visa fs-1"></i>
                        <i class="fab fa-cc-mastercard fs-1"></i>
                    </div>

                    <div class="fullname  col-md-12 container row ">
                        <div class="name col-md-12 ">
                            <label class="fw-bold" for="cardnumber">numéro de carte</label>
                            <input class="form-control" type="number" name="cardnumber" id="cardnumber"
                                patter="^4[0-9]{12}(?:[0-9]{3})?$ | ^(?:5[1-5][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}$"
                                required>
                        </div>
                        <div class="lastname col-md-6 ">
                            <label class="fw-bold" for="lastname">prénom</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" required>
                        </div>
                        <div class="name col-md-6 ">
                            <label class="fw-bold" for="name">Nom</label>
                            <input class="form-control" type="text" name="name" id="name" required>
                        </div>
                        <div class="lastname col-md-6 ">
                            <label class="fw-bold" for="cvv">Date De experation</label>
                            <input class="form-control" type="month" name="experationdate" id="experationdate" required>
                        </div>
                        <div class="lastname col-md-4 ">
                            <label class="fw-bold" for="cvv">cvv</label>
                            <input class="form-control" type="number" name="cvv" id="cvv" required>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary cancelcard" data-dismiss="modal">annuler</button>
                    <button type="button" class="btn btn-success  valide ">validé</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal of pdf generator -->
    <div class="modal fade" id="mypdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">imprimer</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <h3>votre document et pret de imprimer</h3>
                    </div>
                </div>
                <div class="modal-footer text-center">

                    <button type="button" class="btn btn-success ">imprimer <i class="fas fa-file-pdf"></i></button>
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

    <script src="./js/trajets.js">
    </script>


</body>

</html>