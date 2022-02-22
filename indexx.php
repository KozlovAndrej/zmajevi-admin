<?php
require_once('functions.php');
$obj = new Operations();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zmajevi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">  
    
    <style>
    .heading-bg{
	background:black;
	color:white;

   
}
th{
    color:white;
}

body{
    background:url("img/home.jpg");
            background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-size: 100% 120%;
        }

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 
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
<li><a href="logout.php">Logout</a></li>


</ul>
</div>
<div class="welcome-text">
<table class="table">
 
    <tr >
    
      <th scope="col" class ="heading-bg">Tip</th>
      <th scope="col" class ="heading-bg">Karakteristike</th>
      <th scope="col" class ="heading-bg">Ime</th>
      <th scope="col" class ="heading-bg">Delete</th>
    </tr>
<?php
$vals = $obj -> getAll('zmaj');
foreach($vals as $rows){
?>
 
    <tr>
      
        <th scope="col"><?php echo $rows['type'];?></th>
        <th scope="col"><?php echo $rows['description'];?></th>
        <th scope="col"><?php echo $rows['name'];?></th>
        <th scope="col"><a href="delete.php?id=<?php echo $rows['id']?>" class= "btn btn-success">Delete</a></th>
    </tr>
  <?php
}
  ?>
</table>

    </div>
</header>

</body>
</html>