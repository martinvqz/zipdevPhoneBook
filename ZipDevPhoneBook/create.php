<?php
//CREATE | INSERT

include_once("db.php");
 
    $tblName    = $_GET["tblName"];
    $firstName  = $_GET["firstName"];
    $surname    = $_GET["surname"];
    $photo      = $_GET["photo"];

    $idPhoneBook= $_GET["idPhoneBook"];
    $phone      = $_GET["phone"];
    $email      = $_GET["email"];

        if($tblName == "tbl_phoneBook"){
             if(!empty($firstName) && !empty($surname) && !empty($photo)){
                 $sql = "INSERT INTO ".$tblName."(firstName,surname,photo) VALUES ('$firstName','$surname','$photo')";
             }
        }
       
       if($tblName == "tbl_phone"){
           if(!empty($idPhoneBook) && !empty($phone) ){
                $sql = "INSERT INTO ".$tblName."(idPhoneBook,phone) VALUES ('$idPhoneBook','$phone')";
           }
        }

        if($tblName == "tbl_email"){
            if(!empty($idPhoneBook) && !empty($email)){
                $sql = "INSERT INTO ".$tblName."(idPhoneBook,email) VALUES ('$idPhoneBook','$email')";
            }
        }

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    $conn->close();
?>