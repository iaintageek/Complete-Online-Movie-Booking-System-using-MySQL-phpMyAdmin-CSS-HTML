<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "multiplex";

  // connect to mysql database

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);
  session_start();
    $com = $_POST['combo'];
    $quan = $_POST['quantity'];
    $id=$_SESSION["pid"];
    $amt;
    
    if($com =="FC001")
    $pri=600;
  else if($com == "FC002")
    $pri =450;
  else if($com =="FC003")
    $pri=300;
    else if($com =="FC004")
      $pri=150;
  else
      $pri=0;

  $amt=$quan*$pri;
  $_SESSION["Fprice"]=$amt;
  $amt2=$_SESSION["tp"] ;
   $_SESSION["Final"]= $amt+$amt2;
     $sql = "INSERT INTO food_booking(Book_id,Product_id,Quantity,Total) VALUES('$id','$com','$quan','$amt')";

      if ($connect->query($sql)) {
           echo "New record created successfully. Last inserted ID is: " . $id;
           header("location: page7.php");
      }
      else
      {
                      echo "Error: " . $sql . " " . $connect->error;
                  }
    ?>

