<?php

$conn = mysqli_connect("localhost", "root", "", "zmajphp"); 
$sql = "SELECT special.opis, special.ime FROM special WHERE ime LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		<td>".$row['ime']."</td>
		       
		          <td>".$row['opis']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>