<?php
    //READ | SELECT
    include_once 'db.php';
    
    $tblName = $_GET["tblName"];

    if(!empty($tblName)){

        $sql = "SELECT * FROM $tblName ORDER BY idPhoneBook DESC";
        $result = $conn->query($sql);

        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "idPhoneBook: " . $row["idPhoneBook"]. " - Name: " . $row["firstName"]. " " . $row["surname"]. " |  " . $row["photo"]. "<br>";
                 
               $sqlPhone = "SELECT * FROM tbl_phone WHERE idPhoneBook = ".$row['idPhoneBook']." ORDER BY idPhone DESC";
                 $resultPhone = $conn->query($sqlPhone);
                if($resultPhone->num_rows > 0){
                    echo "Phone(s): ";
                    while($rowPhone = $resultPhone->fetch_assoc()) {
                        echo $rowPhone["phone"].", ";  
                    }
                } else{
                        echo "Phone(s): empty<br>";  
                }

                $sqlEmail = "SELECT * FROM tbl_email WHERE idPhoneBook =  ".$row['idPhoneBook']." ORDER BY idEmail DESC";
                $resultEmail = $conn->query($sqlEmail);
                if($resultEmail->num_rows > 0){
                    echo "<br>Email(s): ";
                    while($rowEmail = $resultEmail->fetch_assoc()) {
                         echo $rowEmail["email"].", ";  
                    }
                    echo "<br>";
                } else{
                        echo "Email(s): empty<br>";  
                }
                
                echo "<br>";
            }
        } else {
            echo "<br>The phone book is empty.";
        }

    }

$conn->close();

?>