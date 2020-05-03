<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)) {
   if (!empty($password)) {
      $host = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "multiplex";
      // Create connection
      $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
      if (mysqli_connect_error($conn)) {
         die('Connect Error (' . mysqli_connect_errno($conn) . ') '
            . mysqli_connect_error($conn));
      } else {
         $myusername = mysqli_real_escape_string($conn, $_POST['username']);
         $mypassword = mysqli_real_escape_string($conn, $_POST['password']);
         $query = "SELECT * FROM login WHERE uname = '$username' and pass = '$password'";
         $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
         $ret = mysqli_fetch_array($result);
         $count = mysqli_num_rows($conn,$result);
         if ($ret['uname']==$username and $ret['pass']==$password) {
            header("location: page2.html");
         } else {
            $error = "Your Login Name or Password is invalid";
         }
      }
   } else {
      echo "Password should not be empty";
      die();
   }
} else {
   echo "Username should not be empty";
   die();
}
