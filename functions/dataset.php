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
    try {
      $myquery =  $this->conn->prepare("select * from voyageur where email =:email AND password=:motdepass ");
      $myquery->bindParam(":email", $email);
      $myquery->bindParam(":motdepass", $motdepass);
      $myquery->execute();

      if ($myquery->rowcount() > 0) {
        $data = $myquery->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["email"] = $data["email"];
        $_SESSION["nom"] = $data["nom"];
        $_SESSION["prenom"] = $data["prenom"];
        $_SESSION["telephone"] = $data["telephone"];
        return 1;
        //return 1;
      } else {
        return 0;
      }
    } catch (Exception $ex) {
      return $ex;
    }
  }

  public function getTravels($cityStart, $cityEnd)
  {
    $myquery =  $this->conn->prepare("select * from voyage where  villeDepart = :cityStart AND villeDarrivee = :cityEnd ");
    $myquery->bindParam(":cityStart", $cityStart);
    $myquery->bindParam(":cityEnd", $cityEnd);
    $myquery->execute();
    if ($myquery->rowcount() > 0) {
      $data = $myquery->fetchAll(PDO::FETCH_ASSOC);
      return $data;
    } else {
      return 0;
    }
  }
  public function addTicket($codeVoyage, $email, $telephone)
  {
      $myquery =  $this->conn->prepare("insert into bilet (codeVoyage,email,telephone) values (:codeVoyage,:email,:telephone) ");
      $myquery->bindParam(":codeVoyage", $codeVoyage);
      $myquery->bindParam(":email", $email);
      $myquery->bindParam(":telephone", $telephone);
      if ($myquery->execute()) {
        return 1;
      } else {
        return 0;
      }  
   
  }
  public function allReservations($email)
  {
      $myquery =  $this->conn->prepare("SELECT * from voyageur,voyage,bilet where voyageur.email = bilet.email AND voyage.codeVoyage = bilet.codeVoyage AND voyageur.email = :email");
      $myquery->bindParam(":email", $email);
      $myquery->execute();
      if ($myquery->rowcount() > 0) {
        $data = $myquery->fetchAll(PDO::FETCH_ASSOC);
        return $data;
      } else {
        return 0;
      }  
   
  }
  public function getTotalofMoney($email)
  {
      $myquery =  $this->conn->prepare("SELECT sum(prixVoyage) as prixVoyage from voyageur,voyage,bilet where voyageur.email = bilet.email AND voyage.codeVoyage = bilet.codeVoyage AND voyageur.email = :email");
      $myquery->bindParam(":email", $email);
      $myquery->execute();
      if ($myquery->rowcount() > 0) {
        $data = $myquery->fetch(PDO::FETCH_ASSOC);
        return $data;
      } else {
        return 0;
      }  
   
  }
}
