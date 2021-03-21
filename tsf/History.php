<?php
                $title='History';
            require_once 'includes/header.php'; 
            require_once 'db/conn.php';

             
                  $result= $crud->getHistory();
            
            ?>
       
 <div class ="container">
  

            <h1 class= 'text-center'>My Payment History</h1>
         <table id = "myTable" class = 'table  table-dark'>
            
            <tr>
                  <th> TranSaction No. </th>
                  <th> Name</th>
                  <th>Last Name</th>
                  <th>Contact No</th>
                  <th>Payment-Amount(in Rs) </th>
                        </tr>

                  <?php while($r=$result->fetch(PDO::FETCH_ASSOC)) {?>

                    <tr>
                        <td><?php echo $r['TransactionId']?></td>
                        <td><?php echo $r['firstName']?></td>
                        <td><?php echo $r['lastName']?></td>
                          <td><?php echo $r['phoneNo']?></td>
                        <td><?php echo $r['Amount']?></td>
                
                </tr>

                <?php }?>

            
        </table>

</div>
    







<?php require_once 'includes/footer.php'; ?>
