<?php 
include "dataset.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (isset($_POST["submit"])) {  
        try{
            $connection = new dataset();
            $result =  $connection->getTravels($_POST["citystart"], $_POST["cityend"]);
            if ($result) {
                echo json_encode(array("mydata"=>$result)); 
            } else {
               echo json_encode($result);
            }
        }catch(Exception $ex){
           echo json_encode($ex);
        }
    }
   
}




?>