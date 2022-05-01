<?php
if (isset($_POST['submit'])) {
    echo "yes, PHP connected. <br>";
}
echo implode($_POST);
$con = mysqli_connect('localhost', 'root', '', 'firstdb');
if ($con) {
    echo "Database connected.";
}

$user = $_POST['username'];
$password = $_POST['password'];
//echo $user;
//*********************username check */
$queryname = "SELECT username FROM _users WHERE username=" . "'" . $user . "'";
$namecheck = mysqli_query($con, $queryname);
foreach ($namecheck as $namecheck)
    $username = implode(" ", $namecheck);
//echo $username;
//*********************userid check */
$queryid = "SELECT id FROM _users WHERE username=" . "'" . $user . "'";
$idcheck = mysqli_query($con, $queryid);
foreach ($idcheck as $idcheck)
    $userid = implode(" ", $idcheck);
//echo $userid;
//***********************password check
$querypwd = "SELECT password FROM _users WHERE id=" . "'" . $userid . "'";
$pwdcheck = mysqli_query($con, $querypwd);
foreach ($pwdcheck as $pwdcheck)
    $userpwd = implode(" ", $pwdcheck);
echo $userpwd;
//  Validation                  */
// if ($user == $username && $password == $userpwd) {
//     // Redirect browser
//     header("Location: register.php");

//     exit;
// } else {
//     echo "User Name or Password is incorrect";
// }
// foreach ($check as $value) {
//     if ($value == $user) $verify = true;
//     echo implode(" ", $value);
// }
// if ($verify = true) {

//     echo "$check";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" class="usercheck" method="post">
        <label for="username">Enter Username</label>
        <input type="text" name="username" placeholder="Enter Username">
        <br><br>
        <label for="password">Enter Password</label>
        <input type="password" name="password" placeholder="Enter Password">
        <br><br>
        <input type="submit" name="submit">
    </form>
    <?php echo implode(" ", $_POST); ?>

</body>

</html>