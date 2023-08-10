<?php
if(isset($_POST["search"]))
{
        ob_start();
        include_once "connection_sris.php";
        $conn = dbConnectt();
        $account = $conn->prepare("SELECT * FROM student_profile as sp INNER JOIN courses as c
        ON sp.course_no = c.course_no WHERE  sp.id_no LIKE '".$_POST["search"]."'");
        $account->execute();
        while($result = $account->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>    
                        <td>'.$result["id_no"].'</td>
                        <td>'.$result["first_name"].' '.$result["mid_name"].' '.$result["last_name"].'</td>
                        <td>'.$result["course_name"].'</td>
                        <td> 
                        <form action="den-form.php" method="POST">
                        <input type="hidden" value="'.$result["id_no"].'" name="Id_No"/>
                        <button type = "submit" class="btn btn-dark-primary" ><i class="fas fa-file-medical"></i> Dental</i> </button> 
                        </form>
                        </td>
                </tr>';
        }
}

?>