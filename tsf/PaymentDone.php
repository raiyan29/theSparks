






<?php
                $title='Done';
            require_once 'includes/header.php'; 
            require_once 'db/conn.php';

            
            if(isset($_POST['Submit12'])){

                $fname= $_POST['inputFirstNamePayee'];
                $lname= $_POST['inputLastNamePayee'];
                $amount =   $_POST['inputAmount'];
                $account= $_POST['accountType'];
                 $email=$_POST['inputEmail3'];
                $contactno=$_POST['inputPhone'];

                
                 $isSuccess=$crud->insert12($fname,$lname,$amount,$contactno);

                 if($isSuccess){

                    echo "<h1 class='text-center text-success'>Congrats Payment Done</h1>";

                     echo "<h2 class=' text-center text-success'>Thanks for Trusting E-bank!!Hope you have a good day ahead</h2>";

                    
          }
          else{
                 echo"<h1 class ='text-center text-danger'>There was an Error in the Payment</h1>";
          }
         


            }

            
            ?>



         








<?php require_once 'includes/footer.php'; ?>