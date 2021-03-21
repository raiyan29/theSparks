

<?php 

 class crud{

     private $db;

      function __construct($conn){
          $this->db = $conn;
      }

    public function insert($fname,$lname,$DOB,$account,$addres,$email,$contactno,$pass){
            
         
               try {
                   
                    $sql= "INSERT INTO users(firstName,lastName,dateofbirth,AccountType,Addres,email,ContactNo,Password) VALUES(:fname,:lname,:DOB,:account,:addres,:email,:contactno,:pass)";

                    $stmt=$this->db->prepare($sql);

                    $stmt->bindparam(':fname',$fname);
                    $stmt->bindparam(':lname',$lname);
                    $stmt->bindparam(':DOB',$DOB);
                    $stmt->bindparam(':account',$account);
                    $stmt->bindparam(':addres',$addres);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':contactno',$contactno);
                    $stmt->bindparam(':pass',$pass);
                    $stmt->execute();

                    return true;

               } catch (PDOEXCEPTION $e) {


                                  echo $e->getMessage();
                                  return false;
               }
            }
    public function getContacts(){

        $sql= "SELECT User_d,firstName,lastName,ContactNo FROM `users`";
        $result=$this->db->query($sql);
        return $result;


    }

    public function insert12($fname,$lname,$amount,$contactno){

        try{

        


        $sql= "INSERT INTO bankinghistory(firstName,lastName,Amount,phoneNo) VALUES(:fname,:lname,:amount,:contactno)";
        $stmt=$this->db->prepare($sql);

                    $stmt->bindparam(':fname',$fname);
                    $stmt->bindparam(':lname',$lname);
                
                    $stmt->bindparam(':amount',$amount);
                    
                    
                    $stmt->bindparam(':contactno',$contactno);
                
                    $stmt->execute();

                    return true;
        }catch(PDOEXCEPTION $e)
        {

            echo $e->getMessage();
            return false;
        }


 

    }

    public function getHistory(){


             $sql= "SELECT TransactionId,firstName,lastName,Amount,phoneNo FROM `bankinghistory`";

             $result=$this->db->query($sql);

             return $result;

    }



               

              
        
    }

?>