<?php

    //DB Connection
        $servername = "sql110.epizy.com";
        $username   = "epiz_25288919";
        $password   = "43c3brOuCd";
        $db         = "epiz_25288919_zipdevPhoneBook";

        $conn = new mysqli($servername, $username, $password, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully";
        return;

?>