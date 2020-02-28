<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "multiplex";

  // connect to mysql database

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);
  session_start();

  $_SESSION["Final"]=$_SESSION["tprice"]+$_SESSION["Fprice"];
  $display=$_SESSION["Final"];