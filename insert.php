<?php
require_once('functions.php');
session_start();
$obj = new Operations();
if ($_POST) {
    $type = $_POST['type'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $data = array(
        'type' => $type,
        'description' => $description,
        'name' => $name,
        'creator' =>  $_SESSION['user']
    );

    $obj->insert('zmaj', $data);
    header('location:uspeh.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novi zmaj</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: url("img/sort.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-size: 100% 120%;
            font-family: 'Poppins', sans-serif;
        }

        header {
            font-family: 'Poppins', sans-serif;
        }

        h2 {
            color: white;
        }

        td {
            color: white;
            font-size: 35px;
        }

        button {
            size: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="logo">
            </div>
            <ul class="nav-area">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="insert.php">Insert</a></li>
                <li><a href="indexx.php">Dragons</a></li>
                <li><a href="special-sort.php">Dragon week</a></li>

            </ul>
        </div>
        <div class="welcome-text">
            <form action="" method="post">
                <table class="table table-strip">
                    <tr>
                        <td>
                            <h2>Add a dragon</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td><input class="form-control" type="text" name="type" id="type" placeholder="Type" required></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><input class="form-control" type="text-area" name="description" id="description" placeholder="Description" required></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input class="form-control" type="text" name="name" id="name" placeholder="Name" required></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit" class="btn btn-success">Add</button></td>

                    </tr>
                </table>
            </form>

        </div>
    </header>


</body>

</html>