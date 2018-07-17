<?php
include_once ('conectadb.php');

if(isset($_POST["id"])){
    foreach ($_POST["id"] as $id){
        if($id != 1){
            $sql = "delete from usuarios where userid = '".$id."'";
            mysqli_query($conectar, $sql);
        }

    }
}