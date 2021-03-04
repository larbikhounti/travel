<?php
include "dataset.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (isset($_POST["submit"])) {  
        try{
            $connection = new dataset();
            $result =  $connection->authUser($_POST["motdepass"], $_POST["email"]);
            if ($result) {
                echo json_encode($result); 
            } else {
               echo json_encode($result);
            }
        }catch(Exception $ex){
           echo json_encode($ex);
        }
    }
   
}
