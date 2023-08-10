<?php
//HIDE ERROR
error_reporting(0);
ini_set('display_errors', 0);

//FETCH ALL THE DATA IN MLUC SRIS
include_once "connection_sris.php";
$conn = dbConnectt();
$account = $conn->prepare("SELECT * FROM student_profile as sp INNER JOIN courses as c ON sp.course_no = c.course_no
INNER JOIN add_town as ato ON ato.town_id = sp.town INNER JOIN add_province as apo ON apo.province_id = sp.province
WHERE sp.id_no =:id");
$Id = $_POST['Id_No'];
$account->execute(['id'=>$Id]);
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
$guid_name =$result['guid_name'];
$guid_tel_no  =$result['guid_tel_no'];
$barangay =$result['barangay'];
$town =$result['town'];
$province = $result['province'];
$course_name=$result['course_name'];
?>


<?php
//INSERT QUERY DATA
if (isset($_POST['medicalSubmit'])){
    include_once "assets/connection_clinic.php";
    $conn = dbConnecttt();
  //OUT PATIENT PROFILE
    $idno=$_POST['Id_No'];
    //PAST MEDICAL HISTORY
    $Allergies = $_POST['Allergies'];
    $Allergiesspecify = $_POST['Allergies_specify'];
    $BronchialAsthma = $_POST['Bronchial_Asthma'];
    $HeartDisease = $_POST['Heart_Disease'];
    $HeartDiseasespecify = $_POST['Heart_Disease_specify'];
    $DiabetesMellitus = $_POST['Diabetes_Mellitus'];
    $SeizureDisorder = $_POST['Seizure_Disorder'];
    $Hypertension = $_POST['Hypertension'];
    $BleedingDisorder = $_POST['Bleeding_Disorder'];
    $BleedingDisorderspecify = $_POST['Bleeding_Disorder_specify'];
    $Mumps = $_POST['Mumps'];
    $Measles = $_POST['Measles'];
    $ChickenPox = $_POST['Chicken_Pox'];
    $Tuberculosis = $_POST['Tuberculosis'];
    $Other = $_POST['Other'];
    $Otherspecify = $_POST['Other_specify'];
    $Accidentoperation = implode($_POST['Accident_operation']);
    $Accidentoperationyes = $_POST['Accident_operationyes'];
    $Vaccines = $_POST['Vaccines'];
    $Vaccinesyes = $_POST['Vaccinesyes'];
    $Medication = $_POST['Medication1'];
    $Medicationyes = $_POST['Medicationyes'];
    $Mentalillness = $_POST['Mental_illness'];
    $dateexamined = date("Y-m-d");

    //PHYSICAL EXAMINATION
    $Height=$_POST['Height'];
    $BP=$_POST['BP'];
    $RR=$_POST['RR'];
    $GeneralSurvey=$_POST['General_Survey'];
    $Skin=$_POST['Skin'];
    $HEENT=$_POST['HEENT'];
    $ChestLungs =$_POST['Chest_Lungs'];
    $Weight =$_POST['Weight'];
    $CR =$_POST['CR'];
    $Temperature =$_POST['Temperature'];
    $Heart =$_POST['Heart'];
    $Abdomen =$_POST['Abdomen'];
    $GenitoUrinarySystem =$_POST['Genito_Urinary_System'];
    $Extremities =$_POST['Extremities'];
    $REMARKS =$_POST['REMARKS'];
    $Status =$_POST['Status'];
    $Doctor =$_SESSION['firstname'];
    $Doctorlastname =$_SESSION['lastname'];
    $Doctormiddlename =$_SESSION['middlename'];
    
    
   

//MEDIAL HISTORY INSERT QUERY

    $sql_mh = 'INSERT INTO past_medical_history 
        (Allergies, Allergies_specify,Bronchial_Asthma,Heart_Disease,Heart_Disease_specify,
        Diabetes_Mellitus,Seizure_Disorder,Hypertension, Bleeding_Disorder, Bleeding_Disorder_specify,
        Mumps,Measles,Chicken_Pox,Tuberculosis, Other, Other_specify,Accident_operation, Accident_operationyes,
        Vaccines,Vaccinesyes,Medication,Medicationyes,Mental_illness,date_examined,id_no)
        VALUES (:Allergies,:Allergiesspecify,:BronchialAsthma,:HeartDisease,:HeartDiseasespecify,
        :DiabetesMellitus,:SeizureDisorder,:Hypertension,:BleedingDisorder,:BleedingDisorderspecify,
        :Mumps,:Measles,:ChickenPox,:Tuberculosis,:Other,:Otherspecify,:Accidentoperation,:Accidentoperationyes,
        :Vaccines,:Vaccinesyes,:Medication,:Medicationyes,:Mentalillness,:dateexamined,:idno)';
    $stmt_mh= $conn->prepare($sql_mh);
    $stmt_mh->execute(
        [
            'Allergies' => $Allergies,
            'Allergiesspecify' => $Allergiesspecify,
            'BronchialAsthma' => $BronchialAsthma,
            'HeartDisease' => $HeartDisease,
            'HeartDiseasespecify' => $HeartDiseasespecify,
            'DiabetesMellitus' => $DiabetesMellitus,
            'SeizureDisorder' => $SeizureDisorder,
            'Hypertension' => $Hypertension,
            'BleedingDisorder' => $BleedingDisorder,
            'BleedingDisorderspecify' => $BleedingDisorderspecify,
            'Mumps' => $Mumps,
            'Measles' => $Measles,
            'ChickenPox' => $ChickenPox,
            'Tuberculosis' => $Tuberculosis,
            'Other' => $Other,
            'Otherspecify' => $Otherspecify,
            'Accidentoperation' => $Accidentoperation,
            'Accidentoperationyes' => $Accidentoperationyes,
            'Vaccines' => $Vaccines,
            'Vaccinesyes' => $Vaccinesyes,
            'Medication' => $Medication ,
            'Medicationyes' => $Medicationyes,
            'Mentalillness' => $Mentalillness,
            'dateexamined' => $dateexamined,
            'idno' => $idno,
        ]
    );
    $mhid = $conn->lastInsertId();
    

//PHYSICAL EXAMINATION INSERT QUERY
    
    $sql_pe = "INSERT INTO physical_examination 
        (Height,BP,RR,General_Survey,Skin,HEENT,Chest_Lungs,Weight,CR,Temperature,Heart,Abdomen,
        Genito_Urinary_System,Extremities,REMARKS,Status,Doctor,Doctor_lastname,Doctor_middlename,id_no,date_examined,mh_id)
        VALUES (:Height,:BP,:RR,:GeneralSurvey,:Skin,:HEENT,:ChestLungs,:Weight,:CR,:Temperature,:Heart,:Abdomen,
        :GenitoUrinarySystem,:Extremities,:REMARKS,:Status,:Doctor,:Doctorlastname,:Doctormiddlename,:idno,:dateexamined,:mhid)";
     $stmt_pe= $conn->prepare($sql_pe);
     $stmt_pe->execute([
        'Height' => $Height,
        'BP' => $BP,
        'RR' => $RR,
        'GeneralSurvey' => $GeneralSurvey,
        'Skin' => $Skin,
        'HEENT' => $HEENT,
        'ChestLungs' => $ChestLungs,
        'Weight' => $Weight,
        'CR' => $CR,
        'Temperature' => $Temperature,
        'Heart' => $Heart,
        'Abdomen' => $Abdomen,
        'GenitoUrinarySystem' => $GenitoUrinarySystem,
        'Extremities' => $Extremities,
        'REMARKS' => $REMARKS,
        'Status' => $Status,
        'Doctor' => $Doctor,
        'Doctorlastname' => $Doctorlastname,
        'Doctormiddlename' => $Doctormiddlename,
        'idno' => $idno,
        'dateexamined' => $dateexamined,
        'mhid' => $mhid,
    ]);;

    if($stmt_mh&& $stmt_pe)
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








