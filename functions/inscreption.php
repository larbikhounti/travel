<?php
include "dataset.php";
$status = array(0, 1); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["submit"])) {
        try{
            $connection = new dataset();
            $result =  $connection->createUser($_POST["name"], $_POST["prenom"], $_POST["telephone"], $_POST["datedenaissance"], $_POST["motdepass"], $_POST["email"]);
            if ($result) {
               echo json_encode($status[1]);
            } else {
                echo json_encode($status[0]);
            }
        }catch(Exception $ex){
            echo json_encode(0);
        }
    }
}
