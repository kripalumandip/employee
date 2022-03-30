<?php
include "db.php";

//Deleting
$userid = $_GET['user_id'];
if(isset($userid)){ 
//query to delete data
$query = "DELETE FROM $table WHERE id = {$userid};";
$result = mysqli_query($conn,$query);
header('Location: table.php');
}