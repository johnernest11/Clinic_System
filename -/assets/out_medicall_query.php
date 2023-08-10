<?php
// HIDE ERROR
// error_reporting(0);
// ini_set('display_errors', 0);

// FETCH ALL THE DATA IN MLUC SRIS
include_once "connection_clinic.php";
$conn = dbConnecttt();
$account = $conn->prepare("SELECT * FROM out_patient_profile as sp 
INNER JOIN physical_examination as pe ON sp.op_id =pe.op_id
INNER JOIN past_medical_history as c ON sp.op_id = c.op_id
WHERE pe.pe_id = :idd");
$Idd = $_POST['Pe_No'];
$account->execute(['idd'=>$Idd]);
$update =true;  

$result = $account->fetch(PDO::FETCH_ASSOC);

$op_id=$result['op_id'];
$fullname =
$lastname=$result['lastname'];
$firstname=$result['firstname'];
$middlename=$result['middlename'];
$birth_date =$result['birth_date'];
$Age=date_diff(date_create($birth_date), date_create('today'))->y;
$sex =$result['sex'];
$civilstatus =$result['civilstatus'];
$coursedepartment =$result['coursedepartment'];
$religious =$result['religious'];
$presentaddress =$result['presentaddress'];
$contactno =$result['contactno'];
$guardian =$result['guardian'];
$guardno =$result['guardno'];
$permanentaddress =$result['permanentaddress'];
$peraddno  =$result['peraddno'];

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
$date_examined = $result['date_examined'];



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
$Doctor =$result['Doctor'];
$Doctor_lastname =$result['Doctor_lastname'];
$Doctor_middlename =$result['Doctor_middlename'];
$date_examined =$result['date_examined'];

?>





<?php
//UPDATE DATA
if (isset($_POST['UpdateRemarks1'])){
    include_once "connection_clinic.php";
    $conn = dbConnect();
  
    $pe_id=$_POST['Pe_No'];
    $REMARKS =$_POST['REMARKS'];
    $Status =$_POST['Status'];
   
    $account = $conn->prepare("UPDATE physical_examination SET REMARKS=:REMARKS,
    Status=:Status WHERE pe_id =:pe_id");
    $account->execute(['REMARKS'=>$REMARKS,
                        'Status'=>$Status,
                    'pe_id'=>$pe_id
                    ]); 

    if( $account==true)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfully Updated REMARKS.',
            showConfirmButton: false,
            timer: 2500
            }).then(function() {
                window.location = "op_md_dashboard.php";
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