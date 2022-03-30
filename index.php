<?php include "header.php" ?>

<!-- HTML starts here  -->
<body>
    <div class="container">
      <h3 class="mt-3 mb-3">Add Details of an employee</h3>
      <!-- Form  -->
      <form action="create.php" method="post">
        <!-- Name  -->
        <div class="mb-3 form-group">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input
            name="name"
            type="text"
            class="form-control"
            id="name"
            aria-describedby="emailHelp"
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
            required
          />
        </div>
        <!-- Submit  -->
        <button type="submit" class="btn btn-primary">Submit</button>
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
