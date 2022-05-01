<?php

if (isset($_POST['Add'])) {
    echo "yes, PHP connected. <br>";
}

if ($_POST['lister'] != "") {

    $addlist = $_POST['lister'];
    if (isset($_POST['Add'])) {
        unset($_POST['lister']);
        unset($_POST['Add']);
    }
    echo $addlist;
    $con = mysqli_connect('localhost', 'root', '', 'firstdb');
    if ($con) {
        echo "Database connected.";
    }

    $sql = "INSERT INTO todos(list) VALUES('$addlist')";
    $add = mysqli_query($con, $sql);
}
// $sql2 = "SELECT list FROM todos";
// $row = mysqli_query($con, $sql2);
// $list = mysqli_fetch_all($row, MYSQLI_ASSOC);
//$_list = implode(" ", $list);

// $id += $id;

// $addlist="$addlist";
// $array = [];
// echo implode(" ", $array);
// todo($addlist, $array);

// function todo($addlist, $array)
// {
//     array_push($array, $addlist);
//     // echo $array;
//     return $array;
// }
// echo implode(" ", $array);
unset($_POST['lister']);
unset($_POST['Add']);
?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        Todo list using PHP
        <form action="todo.php" method="post">
            <div class="form">
                <input type="text" name="lister" placeholder="Enter to add to list">
                <input type="submit" name="Add">
            </div>
        </form>
        <div class="list"><input type="checkbox">
            <?php
            //  print_r($list);

            ?>
        </div>
        <?php
        // foreach ($list as $val) {
        //     echo "<li>" . implode($val);
        // }
        ?>
    </div>

</body>

</html>