
 <?php 
  //filter.php  
  if(isset($_POST["from_date"], $_POST["to_date"]))  
  {  
     ob_start();
     include_once "connection_sris.php";
     $conn = dbConnectt();
     $account = $conn->prepare("SELECT sp.*,co.*,c.*,pe.* ,ato.* ,apo.* FROM mluc_sris.student_profile as sp 
     INNER JOIN mluc_sris.courses as co ON co.course_no = sp.course_no
     INNER JOIN mluc_sris.add_town as ato ON ato.town_id = sp.town
     INNER JOIN mluc_sris.add_province as apo ON apo.province_id = sp.province
     INNER JOIN clinic.physical_examination as pe ON sp.id_no =pe.id_no
     INNER JOIN clinic.past_medical_history as c ON c.mh_id = pe.mh_id
     WHERE pe.date_examined BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'");
     $account->execute();

    

     
     while($result = $account->fetch(PDO::FETCH_ASSOC)){
       echo '<tr>    
                     <td>'.$result["id_no"].'</td>
                     <td>'.$result["first_name"].' '.$result["mid_name"].' '.$result["last_name"].'</td>
                     <td>'.$result["course_name"].'</td>
                     <td>'.$result["date_examined"].'</td>
                     <td> 
                     <form action="medical_profilee.php" method="POST">
                        <input type="hidden" value="'.$result["pe_id"].'" name="Pe_No"/>
                        <button type = "submit" class="btn btn-dark-primary" ><i class="fas fa-file-medical"></i> Medical</i> </button> 
                     </form>
                     </td>
     
                     
             </tr>';
     }
           
    }
  
 ?>