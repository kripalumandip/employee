<!-- Header  -->
<?php
 include "header.php";
 include "db.php"; 
?>



<!-- Table  -->
<div class="container">
  <h3 class="mb-3 mt-3">Details of Employees</h3>
  <table id = "myTable" class="table table-bordered">
    <thead>
      <tr class="table-primary">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Position</th>
        <th scope="col">Email</th>
        <th scope="col">Department</th>
        <th scope="col">Entry Date</th>
        <th scope="col">Salary</th>
        <th scope="col">Location</th>
        <th class='text-center' scope="col" colspan="2">Action</th>
      </tr>
    </thead>
    <!-- PHP code to row elements in table  -->
    <?php
    //Selecting data from table and connecting to db
        $query = "SELECT * FROM $table";
        $result = mysqli_query($conn,$query);
    //Displaying all data from database in html table
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $contact = $row['contact'];
        $position = $row['position'];
        $email = $row['email'];
        $department = $row['department'];
        $entry_date = $row['entry_date'];
        $salary = $row['salary'];
        $location = $row['location'];
       echo'<tbody>
              <tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$contact.'</td>
                <td>'.$position.'</td>
                <td>'.$email.'</td>
                <td>'.$department.'</td>
                <td>'.$entry_date.'</td>
                <td>'.$salary.'</td>
                <td>'.$location.'</td>';
                //edit and delete button
          echo  "<td>
                   <a href='edit.php?user_id={$id}'>
                     <button class='btn btn-primary'>Edit</button>
                   </a>
                 </td>";
           echo "<td>
                   <a onClick = \"javascript: return confirm('Are you sure you want to delete ?');\" href='delete.php?user_id={$id}'>
                     <button class='btn btn-danger'>Delete</button>
                   </a>
                 </td>";
         echo '</tr>
            </tbody>';
            }            
        ?>
  </table>
  <h3>Go back to add employee details</h3>
  <a href="index.php"><button class= "btn btn-primary">Add employee</button></a>
</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
</html>