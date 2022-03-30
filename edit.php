<?php 
include "db.php";

//Getting id passed in table page
$userid = $_GET['user_id'];

//query to select data from table where id = $userid
$query = "SELECT * FROM $table WHERE id = $userid";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

//assigning variable name to the data which will be edited
$name = $row['name'];
$contact = $row['contact'];
$position = $row['position'];
$email = $row['email'];
$department = $row['department'];
$entry_date = $row['entry_date'];
$salary = $row['salary'];
$location = $row['location'];

//Processing form data when form is submitted
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $entry_date = $_POST['entry_date'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];
    //sql query to update the table where id = $userid
    $query = "UPDATE $table SET name = '$name', contact = '$contact', position = '$position', email = '$email', department = '$department', entry_date = '$entry_date', salary = '$salary', location = '$location' WHERE id = $userid";
    $update_user = mysqli_query($conn,$query);
    //echo "<script type='text/javascript'>alert('Data Updated Successfully!')</script>";
    header('Location: table.php');

}

?>

<!-- HTML form starts from here -->
<?php include "header.php" ?>
<body>
    <div class="container">
      <h3 class="mt-3 mb-3">Add Details of an employee</h3>
      <!-- Form  -->
      <form action="" method="post">
        <!-- Name  -->
        <div class="mb-3 form-group">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input
            name="name"
            type="text"
            class="form-control"
            id="name"
            aria-describedby="emailHelp"
            value="<?php echo $name ?>"
            required
          />
        </div>
        <!-- Contact  -->
        <div class="mb-3 form-group">
          <label for="exampleInputEmail1" class="form-label">Contact</label>
          <input
            name="contact"
            type="text"
            class="form-control"
            id="contact"
            aria-describedby="emailHelp"
            value="<?php echo $contact ?>"
            required
          />
        </div>
        <!-- Position  -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Position</label>
          <input
            name="position"
            type="text"
            class="form-control"
            id="position"
            aria-describedby="emailHelp"
            value="<?php echo $position ?>"
            required
          />
        </div>
        <!-- Email  -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input
            name="email"
            type="email"
            class="form-control"
            id="email"
            aria-describedby="emailHelp"
            value="<?php echo $email ?>"
            required
          />
        </div>
        <!-- Department  -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Department</label>
          <input
            name="department"
            type="text"
            class="form-control"
            id="department"
            aria-describedby="emailHelp"
            value="<?php echo $department ?>"
            required
          />
        </div>
        <!-- Entry Date  -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Entry Date</label>
          <input
            name="entry_date"
            type="text"
            class="form-control"
            id="entry_date"
            aria-describedby="emailHelp"
            value = "<?php echo $entry_date ?>"
            required
          />
        </div>
        <!-- Salary  -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Salary</label>
          <input
            name="salary"
            type="text"
            class="form-control"
            id="salary"
            aria-describedby="emailHelp"
            value="<?php echo $salary ?>"
            required
          />
        </div>
        <!-- Location  -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Location</label>
          <input
            name="location"
            type="text"
            class="form-control"
            id="location"
            aria-describedby="emailHelp"
            value="<?php echo $location ?>"
            required
          />
        </div>
        <!-- Update  -->
        <button name="update" type="submit" class="btn btn-primary">Update</button>
      </form>
      <h4 class="mt-3 mb-3">Please see the table below</h4>
      <a href="table.php"
        ><button class="btn btn-primary">Go to Table</button></a
      >
    </div>
  </body>
  <!-- JavaScript -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
</html>
