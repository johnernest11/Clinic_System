<?php  
 //filter.php  
//  if(isset($_POST["from_date"], $_POST["to_date"]))  
//  {  
//       $connect = mysqli_connect("localhost", "root", "", "clinic");  
//       $output = '';  
//       $query = "  
//            SELECT * FROM physical_examination  
//            WHERE date_examined BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
//       ";  
//       $result = mysqli_query($connect, $query);  
//       $output .= '  
            
//       ';  
//       if(mysqli_num_rows($result) > 0)  
//       {  
//            while($row = mysqli_fetch_array($result))  
//            {  
//                 $output .= '  
//                      <tr>  
//                           <td>'. $row["pe_id"] .'</td>  
//                           <td>'. $row["date_examined"] .'</td> 
//                      </tr>  
//                 ';  
//            }  
//       }  
//       else  
//       {  
//            $output .= '  
//                 <tr>  
//                      <td colspan="5">No Order Found</td>  
//                 </tr>  
//            ';  
//       }  
//       $output .= '</table>';  
//       echo $output;  
//  }  
 ?>

 <?php 
  //filter.php  
  if(isset($_POST["from_date"], $_POST["to_date"]))  
  {  
     ob_start();
     include_once "connection_clinic.php";
     $conn = dbConnecttt();
     $account = $conn->prepare("SELECT * FROM out_patient_profile as sp 
     INNER JOIN physical_examination as pe ON sp.op_id =pe.op_id
     INNER JOIN past_medical_history as c ON sp.op_id = c.op_id
     WHERE pe.date_examined BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'");
     $account->execute();

    

     
     while($result = $account->fetch(PDO::FETCH_ASSOC)){
       echo '<tr>    
                     <td>'.$result["id_no"].'</td>
                     <td>'.$result["firstname"].' '.$result["middlename"].' '.$result["lastname"].'</td>
                     <td>'.$result["coursedepartment"].'</td>
                     <td>'.$result["date_examined"].'</td>
                     <td> 
                     <form action="op_medicall.php" method="POST">
                     <input type="hidden" value="'.$result["pe_id"].'" name="Pe_No"/>
                     <button type = "submit" class="btn btn-dark-primary" ><i class="fas fa-file-medical"></i> Medical</i> </button> 
                     </form>
                     </td>
     
                     
             </tr>';
     }
           
    }
  
 ?>