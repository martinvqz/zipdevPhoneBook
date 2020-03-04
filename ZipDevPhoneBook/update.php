<?php
    //UPDATE
    include_once("db.php");

    $tblName = $_GET["tblName"];
    $idPhoneBook = $_GET["idPhoneBook"];
    $column = $_GET["column"];
    $value = $_GET["value"];

    if(!empty($tblName) && !empty($idPhoneBook) && !empty($column) && !empty($value)){

        $sql = "SELECT * FROM $tblName WHERE idPhoneBook = $idPhoneBook";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $sql = "UPDATE $tblName SET $column = '$value' WHERE idPhoneBook = $idPhoneBook";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "<br>This record does not exist.";
        }
    }else{
        echo "<br>Missing data.";
    }

    $conn->close();

?>