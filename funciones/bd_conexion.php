<?php
    $conn = new mysqli('localhost', 'root','root','contactos');

    if($conn->connect_error) {
      echo $error = $conn->connect_error;
    }


?>
