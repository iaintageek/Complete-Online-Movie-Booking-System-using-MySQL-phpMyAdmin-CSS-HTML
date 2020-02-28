 <?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "multiplex";

  // connect to mysql database

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);
  session_start();

  // mysql select query
 // $query = "SELECT name FROM movie";

  // for method 1

 // $result1 = mysqli_query($connect, $query);
  // if (isset($_POST['Movie']))
    $name = $_POST['Movie'];

  // if (isset($_POST['Timings']))
    $time = $_POST['Timings'];

  // if (isset($_POST['Class']))
    $class = $_POST['Class'];

  // if (isset($_POST['No.of seats']))
    $seats = $_POST['Nos'];
     

  // Variable that executes request to send data to database
   // $q1="SELECT m.Movie_id from movie m WHERE Name= m.name";
   //$result = $connect->query($q1);
   //$row = $result->fetch_assoc();
    //$id=(int) $row['Movie_id'];
  
    if($name =="Alice in Wonderland")
        $id=1;
    else if($name =="Premchand")
        $id=2;
    else  if($name =="Ichhishta")
        $id=3;

        if($class =="Silver")
          $price=270;
        else if($class == "Gold")
          $price =350;
        else if($class =="Premium")
          $price=450;

        $amt1=$seats*$price;

        $_SESSION["tprice"]=$amt1;
    $sql = "INSERT INTO booking(Name,No_of_seats,Class,Time,Movie_id,Total) VALUES('$name','$seats','$class','$time','$id','$amt1')";
   
   if ($connect->query($sql)) {
     
    $last_id = mysqli_insert_id($connect);
    $_SESSION["pid"] = $last_id;
     header("location: food.php");
                } 
	
  else
	{
                    echo "Error: " . $sql . " " . $connect->error;
                }

  ?>

