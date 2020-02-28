<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "multiplex";

  // connect to mysql database

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);

  $sql="Select Silver,Gold,Premium,Time from seats where Movie_id=1 ;";
  
  if ($result = $connect->query($sql)) {

    echo "<tr><td colspan='5'></td></tr>";
    while($r= $result->fetch_row())
    {
        echo "<tr>";
        echo "<td align='center'>$r[0]</td>";
        echo "<td width='200'>$r[1]" . " $r[2]</td>";
        echo "<td align='center' width='40'> $r[3]</td>";
        echo "</tr>";
    }

}
$connect->close();
?>

   