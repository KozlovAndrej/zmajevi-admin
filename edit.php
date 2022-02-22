<?php
require_once('functions.php');

$obj = new Operations();

$where = "where id=".$_GET['id'];

$rows = $obj->getSingle('zmaj', $where);

if($_POST){
    $type = $_POST['type'];
    $description = $_POST['description'];
    $name = $_POST['name'];

   $data = array(
    'type'=>$type,
    'description'=>$description,
    'name'=>$name

   );

   
   $obj->update('zmaj', $where, $data);
   header('location:indexx.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novi zmaj</title>
    <link rel="stylesheet" href="style.css"> 
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
<form action="" method ="post">
<table class = "table table-strip">
    <tr>
    
    </tr>
    <tr>
    <td>Type</td>
    <td><input class = "form-control"type="text" name="type" id="type" placeholder = "Type" value = "<?php echo $rows['type']?>"required></td>
</tr>
<tr>
    <td>Description</td>
    <td><input class = "form-control" type="text-area" name="description" id="description" placeholder = "Description" value = "<?php echo $rows['description']?>" required></td>
</tr>
<tr>    
<td>Name</td>
    <td><input class = "form-control" type="text" name="name" id="name" placeholder = "Name" value = "<?php echo $rows['name']?>" required></td>

    </tr>
    <tr>    
<td></td>
    <td><button type ="submit" name= "submit" class="btn btn-success" href = "update.php">Change</button></td>

    </tr>
</table>
</form>

    </div>
</header>


</body>
</html>
