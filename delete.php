<?php
include('functions.php');
$obj = new Operations();
$where = "where id ='".$_GET['id']."'";

$rs = $obj->delete('zmaj', $where);

header('Location:indexx.php');

?>