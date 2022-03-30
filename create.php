<?php
include "db.php" ;
include "header.php";
//Getting data from the form and naming them as variable
$name = $_POST['name'];
$contact = $_POST['contact'];
$position = $_POST['position'];
$email = $_POST['email'];
$department = $_POST['department'];
$entry_date = $_POST['entry_date'];
$salary = $_POST['salary'];
$location = $_POST['location'];


//Inserting data into table
$query = "INSERT INTO $table (name, contact, position, email, department, entry_date, salary, location )
VALUES ('$name', '$contact', '$position', '$email', '$department', '$entry_date', '$salary', '$location')";
$add_employee = mysqli_query($conn,$query);
//creating alert for user to show the query is executed successfully or not
if(!$add_employee){
  echo "Something went wrong";
  mysqli_error($conn);
}
else{
  echo "<script type='text/javascript'>alert('Employee added successfully!')</script>";
  header('Location: index.php');
}
//echo "<h3>Employee added successfully.</h3>";
//echo '<a href = "index.php"><button class = "btn btn-primary">Add another employee</button></a>';

$conn->close();
?>