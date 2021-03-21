<?php
                $title='Payment Details';
            require_once 'includes/header.php'; 
            require_once 'db/conn.php'

            
        
            ?>
         <div class="container">
         <h1 class ="text-center">Payment Details !!</h1>
         <form  method ="post" action="PaymentDone.php">
    <div class="row mb-4">
    <label for="firstName" class=" col-form-label">Name of the Payee</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="inputFirstNamePayee">
    </div>
  </div>
    <div class="row mb-4">
    <label for="lastName" class=" col-form-label">Last Name of the Payee</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="inputLastNamePayee">
    </div>
  </div>
  <div class="row mb-4">
    <label for="inputAmount" class=" col-form-label">Enter the Amount</label>
    <div class="col-sm-12">
      <input type="number" class="form-control" name="inputAmount">
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
    <label for="inputDOB" class=" col-form-label">Enter the Phone No</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="inputPhone">
    </div>
</div>
  <div class="row-mb-4">
    <label for="inputEmail3" class= " col-form-label">Email</label>
    <div class="col-sm-12">
      <input type="email" class="form-control" name="inputEmail3">
    </div>
  </div>

    
  <div class="d-grid gap-2">
  <button class="btn btn-primary"  name="Submit12" >Make Payment!!</button>
  </div>

</form>

</div>

            


 
<?php require_once 'includes/footer.php'; ?>