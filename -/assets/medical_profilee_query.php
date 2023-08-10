<?php
// HIDE ERROR
error_reporting(0);
ini_set('display_errors', 0);

//FETCH ALL THE DATA IN MLUC SRIS
include_once "connection_multi.php";
$conn = dbConnectMulti();
$account = $conn->prepare("SELECT sp.*,co.*,c.*,pe.* ,ato.* ,apo.* FROM mluc_sris.student_profile as sp 
INNER JOIN mluc_sris.courses as co ON co.course_no = sp.course_no
INNER JOIN mluc_sris.add_town as ato ON ato.town_id = sp.town
INNER JOIN mluc_sris.add_province as apo ON apo.province_id = sp.province
INNER JOIN clinic.physical_examination as pe ON sp.id_no =pe.id_no
INNER JOIN clinic.past_medical_history as c ON c.mh_id = pe.mh_id
WHERE pe.pe_id = :Pe_No");
$Idd = $_POST['Pe_No'];
$account->execute(['Pe_No'=>$Idd]);
$update =true;  

$result = $account->fetch(PDO::FETCH_ASSOC);

$id_no=$result['id_no'];
$last_name=$result['last_name'];
$first_name=$result['first_name'];
$mid_name=$result['mid_name'];
$sex =$result['sex'];
$civil_status =$result['civil_status'];
$religion =$result['religion'];
$tel_no =$result['tel_no'];
$date_birth =$result['date_birth'];
$Age=date_diff(date_create($date_birth), date_create('today'))->y;
$guid_name =$result['guid_name'];
$guid_tel_no  =$result['guid_tel_no'];
$barangay =$result['barangay'];
$town =$result['town'];
$province = $result['province'];
$course_name=$result['course_name'];
$shortcut=$result['shortcut'];

$pe_id=$result['pe_id'];
$Height=$result['Height'];
$BP=$result['BP'];
$RR=$result['RR'];
$General_Survey=$result['General_Survey'];
$Skin=$result['Skin'];
$HEENT=$result['HEENT'];
$Chest_Lungs =$result['Chest_Lungs'];
$Weight =$result['Weight'];
$CR =$result['CR'];
$Temperature =$result['Temperature'];
$Heart =$result['Heart'];
$Abdomen =$result['Abdomen'];
$Genito_Urinary_System =$result['Genito_Urinary_System'];
$Extremities =$result['Extremities'];
$REMARKS =$result['REMARKS'];
$date_examined =$result['date_examined'];



$mh_id = $result['mh_id']; 
$Allergies = $result['Allergies'];
$Allergies_specify = $result['Allergies_specify'];
$Bronchial_Asthma = $result['Bronchial_Asthma'];
$Heart_Disease = $result['Heart_Disease'];
$Heart_Disease_specify = $result['Heart_Disease_specify'];
$Diabetes_Mellitus = $result['Diabetes_Mellitus'];
$Seizure_Disorder = $result['Seizure_Disorder'];
$Hypertension = $result['Hypertension'];
$Bleeding_Disorder = $result['Bleeding_Disorder'];
$Bleeding_Disorder_specify = $result['Bleeding_Disorder_specify'];
$Mumps = $result['Mumps'];
$Measles = $result['Measles'];
$Chicken_Pox = $result['Chicken_Pox'];
$Tuberculosis = $result['Tuberculosis'];
$Other = $result['Other'];
$Other_specify = $result['Other_specify'];
$Accident_operation = $result['Accident_operation'];
$Accident_operationyes = $result['Accident_operationyes'];
$Vaccines = $result['Vaccines'];
$Vaccinesyes = $result['Vaccinesyes'];
$Medication = $result['Medication'];
$Medicationyes = $result['Medicationyes'];
$Mental_illness = $result['Mental_illness'];
$Doctor =$result['Doctor'];
$Doctor_lastname =$result['Doctor_lastname'];
$Doctor_middlename =$result['Doctor_middlename'];
$date_examined = $result['date_examined'];

?>



<?php
//UPDATE DATA
if (isset($_POST['UpdateRemarks'])){
    include_once "connection_clinic.php";
    $conn = dbConnect();
  
    $pe_id=$_POST['pe_id'];
    $REMARKS =$_POST['REMARKS'];
    $Status =$_POST['Status'];
   
  
    $account = $conn->prepare("UPDATE  physical_examination SET REMARKS=:REMARKS,
    Status= :Status WHERE pe_id =:pe_id");
    $account->execute(['pe_id'   => $pe_id,
                       'REMARKS' =>$REMARKS,
                       'Status'  =>$Status,
                       ]); 

    if( $account==true)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Update Remarks .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = "dashboard.php";
        }); 
</script>
                  <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            alert('error occured while updating data');
        </script>
        <?php
    }
}

?>


