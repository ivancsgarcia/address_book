<?php

include 'connect.php';

if(isset($_GET['deleteId'])){

    $id = $_GET['deleteId'];

    $sql = "DELETE FROM addresses WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        // echo "Data deleted successfully";
        header("location:read.php");
      } else {
        echo "Error deleting data: " . mysqli_error($conn);
      }

}

?>