<?php

// Create connection
// $conn = mysqli_connect("localhost", "root", "", "mluc_sris");
// $sql = "SELECT * FROM student_profile WHERE id_no LIKE '%".$_POST['name']."%'";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result)>0){
// 	while ($row=mysqli_fetch_assoc($result)) {
// 		echo '	<tr>
// 		          <td>'.$row['id_no'].'</td>
// 		          <td>'.$row['last_name'].''.$row['first_name'].' '.$row['mid_name'].'</td>
// 		          <td>'.$row['first_name'].'</td>
//                   <td> 
//                   <a href="medical_profile.php?editt='.$row["id_no"].'"class="btn btn-primary btn-sm "><span class ="fa fa-file-medical"> Medical</a>
//                   </td>
// 		        </tr>';
// 	}
// }



ob_start();
include_once "connection_clinic.php";
$conn = dbConnecttt();
$account = $conn->prepare("SELECT * FROM out_patient_profile as op INNER JOIN physical_examination as pe ON op.op_id = pe.op_id WHERE  op.lastname OR op.firstname LIKE '%".$_POST['name']."%'  AND  pe.Status ='COMPLETED'");
$account->execute();
while($result = $account->fetch(PDO::FETCH_ASSOC)){
  echo '<tr>    
                <td>'.$result["pe_id"].'</td>
                <td>'.$result["firstname"].' '.$result["middlename"].' '.$result["lastname"].'</td>
                <td>'.$result["date_examined"].'</td>
                <td> 
                <form action="op_medicall.php" method="POST">
                <input type="hidden" value="'.$result["pe_id"].'" name="Pe_No"/>
                <button type = "submit" class="btn btn-dark-primary btn-md" ><i class=" fas fa-record" aria-hidden="true"> View</i> </button> 
                </form>
                </td>

                
        </tr>';
}




?>