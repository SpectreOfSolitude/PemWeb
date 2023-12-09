<?php
    $inputan = $_POST['nilai_matkul'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Loop through dynamic fields
        foreach ($_POST as $key => $value) {
            echo "$key: $value\n";
            // Do something with the data, such as storing it in a database
        }
    } else {
        echo "Invalid access method";
    }
?>