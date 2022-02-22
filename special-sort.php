<?php  
  

	
 $connect = mysqli_connect('localhost', 'root', '', 'zmajphp');
 $query = "SELECT special.opis, special.ime FROM special ORDER BY ime DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Nedeljnik</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
           <link rel="stylesheet" href="style.css">    

           <style>
    body {
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background: linear-gradient(#2b1055, #7597de);
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
        }
        .container{
             color:white;
        }
        header{
             height:20vh;
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
<li><a href="indexx.php">Dragons</a></li>
<li><a href="special-sort.php">Dragon week</a></li>
<li><a href="special-search.php">Find a dragon</a></li>
<li><a href="logout.php">Logout</a></li>

</ul>
</div>

</header>

           <br />            
           <div class="container" style="width:700px;" align="center">  
                <h3 class="text-center">Zmajevi iz sveta Harija Potera</h3><br />  
                <div class="table-responsive" id="user_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th><a class="column_sort" id="opis" data-order="desc" href="#">Description</a></th>  
                               <th><a class="column_sort" id="ime" data-order="desc" href="#">Name</a></th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["opis"]; ?></td>  
                               <td><?php echo $row["ime"]; ?></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $(document).on('click', '.column_sort', function(){  
           var column_name = $(this).attr("id");  
           var order = $(this).data("order");  
           var arrow = '';  
           //glyphicon glyphicon-arrow-up  
           //glyphicon glyphicon-arrow-down  
           if(order == 'desc')  
           {  
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';  
           }  
           else  
           {  
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';  
           }  
           $.ajax({  
                url:"sort.php",  
                method:"POST",  
                data:{column_name:column_name, order:order},  
                success:function(data)  
                {  
                     $('#user_table').html(data);  
                     $('#'+column_name+'').append(arrow);  
                }  
           })  
      });  
 });  
 </script>  