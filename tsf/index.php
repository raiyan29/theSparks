
<?php
                $title='Index';
            require_once 'includes/header.php'; 
            require_once 'db/conn.php'

            
            
            
            ?>
      <div class ="container">
    <h1 class="text-center">Registeration for E-Banking</h1>
    
    <form method="post" action="success.php">
    <div class="row mb-4">
    <label for="firstName" class=" col-form-label">First Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="inputFirstName">
    </div>
  </div>
    <div class="row mb-4">
    <label for="lastName" class=" col-form-label">Last Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="inputLastName">
    </div>
  </div>
  <div class="row mb-4">
    <label for="inputDOB" class=" col-form-label">Date Of Birth</label>
    <div class="col-sm-12">
      <input type="date" class="form-control" name="inputDOB">
    </div>
  </div>
  <div class="row mb-4">
    <label for="inputaccountType" class=" col-form-label">Account Type</label>
    <div class="col-sm-12">
    <select class="form-select" aria-label="Default select example" name="accountType">
    <option selected>Please Choose from the Options</option>
    <option value="Current Account">Current Account</option>
    <option value="Savings account">Savings Account</option>
     
</select>
    </div>
  </div>
  <div class="row mb-4">
    <label for="inputDOB" class=" col-form-label">Address</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="inputAddress">
    </div>
  <div class="row-mb-4">
    <label for="inputEmail3" class= " col-form-label">Email</label>
    <div class="col-sm-12">
      <input type="email" class="form-control" name="inputEmail3">
    </div>
  </div>
  <div class="row mb-4">
    <label for="inputContact" class=" col-form-label">Contact No</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="inputContact">
    </div>
  </div>
  <div class="row mb-4">
    <label for="inputPassword3" class=" col-form-label">Password</label>
    <div class="col-sm-12">
      <input type="password" class="form-control" name="inputPassword3">
    </div>
  </div>
       <div class="d-grid gap-2">
  <button class="btn btn-primary" name="Submit" >Submit!!</button>
  
</div>
</form>

    <?php require_once 'includes/footer.php'; ?>

    </div>



    