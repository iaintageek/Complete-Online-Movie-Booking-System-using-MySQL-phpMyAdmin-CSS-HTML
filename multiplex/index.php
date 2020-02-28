<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body,
    html {
      height: 100%;
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    .bg-img {
      /* The image used */
      background-image: url("home.jpg");
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      border-radius: 20px;
      position: relative;
    }

    /* Add styles to the form container */
    .container {
      position: absolute;
      right: 0;
      margin: 20px;
      max-width: 300px;
      padding: 16px;
      background-color: white;
      opacity: 1;
      font-weight: bold;
      font-family: sans-serif;
      border-radius: 20px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit button */
    .container input[type="submit"] {
      background: #4CAF50;
      color: black;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      font-family: sans-serif;
      font-size: 18px;
      border-radius: 20px;
    }

    .container a{
      text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
    }

    .container input[type="submit"]:hover {
      cursor: pointer;
      background: #ddd;
      color: #000;
    }
  </style>
</head>

<body>

  <h1 align="center">Multiplex Management System </h1>

  <p align="center">Provides an easy to use interface for admins to manage the theatres to give their customers the best possible experience </p>
  <div class="bg-img">
    <div style=" background-color: rgb(35, 35, 35);"></div>
    <div class="container">
      <form method="POST" action="login.php">
        <h1>Login</h1>
        Username : <input id="username" type="text" name="username"><br><br>
        Password : <input id="password" type="password" name="password"><br><br>
        <input type="submit" value="Submit"><br>
        <p>
          New User? &nbsp&nbsp<a href="http://localhost/multiplex/create_user.php" style="color:black">Click here to sign up</a>
        </p>
      </form>
    </div>
  </div>
</body>

</html>