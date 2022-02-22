<?php

define ('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'zmajphp');

class Operations{
    private $con;

    function __construct(){
        global $con;
        $con = new mysqli(DB_SERVER,DB_USER, DB_PASS,DB_NAME);
        if($con->connect_error){
            die('Veza sa bazom nije uspela.');
        }
    }

    public function insert($table, $data){
        global $con;
        $fields = array_keys($data);
      // print_r($data);
        $sql = "INSERT INTO ".$table."(".implode(',', $fields).") VALUES('".implode("','", $data)."')";
        return mysqli_query($con, $sql);

       header('Location:index.php');
    }

    public function getAll($table){
        global $con;
        $sel = "select * from ".$table."";
        $qry = mysqli_query($con,$sel);
        while($rs = mysqli_fetch_array($qry)){
            $temp_array[] = $rs;
        }
        return $temp_array;
    }
    public function delete($table, $where){
        global $con;

        echo  $del = "delete from ".$table." ". $where;

        return mysqli_query($con, $del);
    }

    public function getSingle($table, $where){
        global $con;

         $sel = "select * from ".$table." ". $where;

        $qry = mysqli_query($con,$sel);

        $rs =  mysqli_fetch_array($qry);

        return $rs;
    }

    public function update($table, $where, $data){
        global $con;

        $sql = "UPDATE ".$table." SET ";

        $sets = array();

        foreach($data as $column => $value){
            $sets[] = "'".$column."' = '".$value."'";   
        }

      
        $sql .= implode(', ',$sets);

         $sql .= $where;

        return mysqli_query($con,$sql);
    }
}


?>