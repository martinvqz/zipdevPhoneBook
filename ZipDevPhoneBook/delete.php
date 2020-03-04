<?php
//DELETE
include_once("db.php");

    $tblName = $_GET["tblName"];
    $idPhoneBook = $_GET["idPhoneBook"];

    $sql = "SELECT * FROM $tblName WHERE idPhoneBook = $idPhoneBook";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $sql = "DELETE FROM $tblName WHERE idPhoneBook = $idPhoneBook";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "<br>This record does not exist.";
    }

$conn->close();

?>