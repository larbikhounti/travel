<?php 
session_start();
include "dataset.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connection = new dataset();
    if (isset($_POST["submit"])) { 
        try{
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
    if (isset($_POST["billet"])) { 
        try{
            $numberdebellit = $_POST["numberdebillet"];
            $result;
            for ($i=0; $i < $numberdebellit ; $i++) { 
                $result =  $connection->addTicket($_POST["codeVoyage"],$_POST["email"],$_SESSION["telephone"]);
               
            }
            
            if ($result) {
                echo json_encode($result); 
               // echo json_encode($result); 
            } else {
               echo json_encode($result);
            }
        }catch(Exception $ex){
           echo json_encode($ex);
        }
    }
   
}




?>