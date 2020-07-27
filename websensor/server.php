<?php
  include("connection.php");

  if(!empty($_POST)){
    $humidity = $_POST["Calc2"];
    $temperature = $_POST["Calc3"];
    
    $query = "INSERT INTO websensor (nilai_sensor, nilai_sensor2)
            VALUES ('".$humidity."', '".$temperature."')";
    if ($conn->query($query) === TRUE) {
      echo "Berhasil menyimpan data ke table log";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

?>