<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email =filter_input(INPUT_POST,'email');
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
            $query = "SELECT * FROM login ";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $ret = mysqli_fetch_array($result);
            if ($ret['uname'] == $username and $ret['pass'] == $password) {
                echo "Username or Password Already Exists";
            } else {
                $sql = "INSERT INTO login(uname,pass,email_id) values ('$username','$password','$email')";
                if ($conn->query($sql)) {
                    echo "New record is inserted sucessfully";
                } else {
                    echo "Error: " . $sql . " " . $conn->error;
                }
                $conn->close();
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
