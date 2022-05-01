<?php
if (isset($_POST['submit'])) {
  echo "IS set <br>";

  //  echo $user ."<br>";
  //  echo $password;
}
$user = $_POST['username'];
$password = $_POST['password'];
$connection = mysqli_connect('localhost', 'root', '', 'firstdb');
if ($connection) {
  echo "Connection Success";
} else {
  die("Connection is failled");
}
$query = "INSERT INTO _users(username,password) VALUES('$user','$password')";
// $query .= "";
$result = mysqli_query($connection, $query);
if (!$result) {
  die("Database failed") . mysqli_error;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>


</head>

<body>
  <div class="main">

    <form action="register.php" class="usercheck" method="post">
      <label for="username">Enter Username</label>
      <input type="text" name="username" placeholder="Enter Username"> </input>
      <br><br>
      <label for="password">Enter Password</label>
      <input type="password" name="password" placeholder="Enter Password">
      <br><br>
      <input type="submit" name="submit">
    </form>

  </div>
  <div class="database">

  </div>

</body>

</html>