<?php

class dataset
{
  private $conn;

  public function __construct()
  {
    $this->conn = new PDO("mysql:host=localhost;dbname=oncf", "root", "");
  }

  public  function createUser($nom, $prenom, $telephone, $dateden, $motdepass, $email)
  {
    $myquery =  $this->conn->prepare("insert into voyageur (email,password,nom,prenom,date_naissance,telephone) values (:email,:motdepass,:nom,:prenom,:dateden,:telephone) ");
    $myquery->bindParam(":email", $email);
    $myquery->bindParam(":motdepass", $motdepass);
    $myquery->bindParam(":nom", $nom);
    $myquery->bindParam(":prenom", $prenom);
    $myquery->bindParam(":dateden", $dateden);
    $myquery->bindParam(":telephone", $telephone);
    if ($myquery->execute()) {
      return 1;
    } else {
      return 0;
    }
  }
  public  function authUser($motdepass, $email)
  { 
    try{
      $myquery =  $this->conn->prepare("select * from voyageur where email =:email AND password=:motdepass ");
      $myquery->bindParam(":email", $email);
      $myquery->bindParam(":motdepass", $motdepass);
      $myquery->execute();
    
      if ($myquery->rowcount() > 0) {
        $ho = $myquery->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["email"] = $ho["email"];
        $_SESSION["nom"] = $ho["nom"];
        $_SESSION["prenom"] = $ho["prenom"];
        return 1;
        //return 1;
      } else {
        return 0;
      }
    }catch(Exception $ex){
      return $ex;
    }
   
  }
}
