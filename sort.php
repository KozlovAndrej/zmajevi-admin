<?php  
 $connect = mysqli_connect("localhost", "root", "", "zmajphp");  
 $output = '';  
 $order = $_POST["order"];  
 if($order == 'desc')  
 {  
      $order = 'asc';  
 }  
 else  
 {  
      $order = 'desc';  
 }  
 $query = "SELECT special.opis, special.ime FROM special ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";  
 $result = mysqli_query($connect, $query);  
 $output .= '  
 <table class="table table-bordered">  
      <tr>  
           <th><a class="column_sort" id="opis" data-order="'.$order.'" href="#">Opis</a></th>  
           <th><a class="column_sort" id="ime" data-order="'.$order.'" href="#">Ime</a></th>  
           
      </tr>  
 ';  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
      <tr>   
           <td>' . $row["opis"] . '</td>  
           <td>' . $row["ime"] . '</td>  
      </tr>  
      ';  
 }  
 $output .= '</table>';  
 echo $output;  
 ?>  