<?php
// HIDE ERROR
error_reporting(0);
ini_set('display_errors', 0);

// FETCH ALL THE DATA IN MLUC SRIS
include_once "connection_clinic.php";
$conn = dbConnecttt();
$Idd = $_GET['edit'];
$account = $conn->prepare("SELECT * FROM out_patient_profile as sp 
INNER JOIN physical_examination as pe ON sp.op_id =pe.op_id
INNER JOIN past_medical_history as c ON sp.op_id = c.op_id
WHERE pe.pe_id = '$Idd'");
$account->execute();
$update =true;  

$result = $account->fetch(PDO::FETCH_ASSOC);

$op_id=$result['op_id'];
$lastname=$result['lastname'];
$firstname=$result['firstname'];
$midlename=$result['midname'];
$birth_date =$result['birth_date'];
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
$Doctor =$result['firstname'];
$Doctor_lastname =$result['lastname'];
$Doctor_middlename =$result['middlename'];
$date_examined =$result['date_examined'];

?>



<?php
//INSERT DATA
if (isset($_POST['confirmsubmit1'])){
    include_once "connection_clinic.php";
    $conn = dbConnecttt();
  //OUT PATIENT PROFILE
    
    $lastname =$_POST['lastname'];
    $firstname =$_POST['firstname'];
    $middlename =$_POST['middlename'];
    $birth_date =$_POST['birth_date'];
    $sex =$_POST['sex'];
    $civilstatus =$_POST['civilstatus'];
    $coursedepartment =$_POST['coursedepartment'];
    $religious =$_POST['religious'];
    $presentaddress =$_POST['presentaddress'];
    $contactno =$_POST['contactno'];
    $guardian =$_POST['guardian'];
    $guardno =$_POST['guardno'];
    $permanentaddress =$_POST['permanentaddress'];
    $peraddno =$_POST['peraddno'];

    //PAST MEDICAL HISTORY
    $Allergies = $_POST['Allergies'];
    $Allergies_specify = $_POST['Allergies_specify'];
    $Bronchial_Asthma = $_POST['Bronchial_Asthma'];
    $Heart_Disease = $_POST['Heart_Disease'];
    $Heart_Disease_specify = $_POST['Heart_Disease_specify'];
    $Diabetes_Mellitus = $_POST['Diabetes_Mellitus'];
    $Seizure_Disorder = $_POST['Seizure_Disorder'];
    $Hypertension = $_POST['Hypertension'];
    $Bleeding_Disorder = $_POST['Bleeding_Disorder'];
    $Bleeding_Disorder_specify = $_POST['Bleeding_Disorder_specify'];
    $Mumps = $_POST['Mumps'];
    $Measles = $_POST['Measles'];
    $Chicken_Pox = $_POST['Chicken_Pox'];
    $Tuberculosis = $_POST['Tuberculosis'];
    $Other = $_POST['Other'];
    $Other_specify = $_POST['Other_specify'];
    $Accident_operation = implode($_POST['Accident_operation']);
    $Accident_operationyes = $_POST['Accident_operationyes'];
    $Vaccines = $_POST['Vaccines'];
    $Vaccinesyes = $_POST['Vaccinesyes'];
    $Medication = $_POST['Medication'];
    $Medicationyes = $_POST['Medicationyes'];
    $Mental_illness = $_POST['Mental_illness'];
    $date_examined = date("Y-m-d");

    //PHYSICAL EXAMINATION
    $Height=$_POST['Height'];
    $BP=$_POST['BP'];
    $RR=$_POST['RR'];
    $General_Survey=$_POST['General_Survey'];
    $Skin=$_POST['Skin'];
    $HEENT=$_POST['HEENT'];
    $Chest_Lungs =$_POST['Chest_Lungs'];
    $Weight =$_POST['Weight'];
    $CR =$_POST['CR'];
    $Temperature =$_POST['Temperature'];
    $Heart =$_POST['Heart'];
    $Abdomen =$_POST['Abdomen'];
    $Genito_Urinary_System =$_POST['Genito_Urinary_System'];
    $Extremities =$_POST['Extremities'];
    $REMARKS =$_POST['REMARKS'];
    $Status =$_POST['Status'];
    $Doctor =$_SESSION['firstname'];
    $Doctor_lastname =$_SESSION['lastname'];
    $Doctor_middlename =$_SESSION['middlename'];
  
    $Out_patient_profile = $conn->prepare("INSERT INTO out_patient_profile (lastname,firstname,middlename,birth_date,sex,civilstatus,coursedepartment,
    religious,presentaddress,contactno,guardian,guardno,permanentaddress,peraddno)
    VALUES ('$lastname', '$firstname','$middlename','$birth_date','$sex','$civilstatus', '$coursedepartment','$religious','$presentaddress',
    '$contactno','$guardian','$guardno','$permanentaddress','$peraddno')");
     $Out_patient_profile->execute(); 
    $op_id = $conn->lastInsertId();


    $Past_medical_history = $conn->prepare("INSERT INTO past_medical_history (Allergies,Allergies_specify,Bronchial_Asthma,Heart_Disease,Heart_Disease_specify,
    Diabetes_Mellitus,Seizure_Disorder,Hypertension,Bleeding_Disorder,Bleeding_Disorder_specify,Mumps,Measles,Chicken_Pox,Tuberculosis,Other,
    Other_specify,Accident_operation,Accident_operationyes,Vaccines,Vaccinesyes,Medication,Medicationyes,Mental_illness,date_examined,op_id)
    VALUES ('$Allergies','$Allergies_specify','$Bronchial_Asthma','$Heart_Disease','$Heart_Disease_specify','$Diabetes_Mellitus',
    '$Seizure_Disorder','$Hypertension','$Bleeding_Disorder','$Bleeding_Disorder_specify','$Mumps','$Measles',
    '$Chicken_Pox','$Tuberculosis','$Other','$Other_specify','$Accident_operation','$Accident_operationyes',
    '$Vaccines','$Vaccinesyes','$Medication','$Medicationyes','$Mental_illness','$date_examined',' $op_id')");
     $Past_medical_history->execute();

    $Physical_examination = $conn->prepare("INSERT INTO physical_examination (Height,BP,RR,General_Survey,Skin,HEENT,Chest_Lungs,
    Weight,CR,Temperature,Heart,Abdomen,Genito_Urinary_System,Extremities,REMARKS,Status,Doctor,Doctor_lastname,Doctor_middlename,date_examined,op_id)
    VALUES ('$Height', '$BP','$RR','$General_Survey','$Skin','$HEENT','$Chest_Lungs','$Weight',
    '$CR','$Temperature','$Heart','$Abdomen','$Genito_Urinary_System','$Extremities','$REMARKS','$Status','$Doctor','$Doctor_lastname','$Doctor_middlename','$date_examined','$op_id')");
    $Physical_examination->execute();  


    if( $Out_patient_profile && $Past_medical_history&& $Physical_examination)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Inserted .',
            showConfirmButton: false,
            timer: 1500
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


<?php
//UPDATE DATA
if (isset($_POST['UpdateRemarks1'])){
    include_once "connection_clinic.php";
    $conn = dbConnect();
  
    $pe_id=$_POST['pe_id'];
    $REMARKS =$_POST['REMARKS'];
    $Status =$_POST['Status'];
   
  
    $account = $conn->prepare("UPDATE physical_examination SET REMARKS='$REMARKS',
    Status='$Status'WHERE pe_id ='$pe_id'");
    $account->execute(); 

    if( $account==true)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Update Remarks111 .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = "out_patient_medicall.php?edit=<?php echo$pe_id?>";
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