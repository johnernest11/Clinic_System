<?php
//HIDE ERROR
// error_reporting(0);
// ini_set('display_errors', 0);

//FETCH ALL THE DATA IN MLUC SRIS
include_once "connection_clinic.php";
$conn = dbConnecttt();
$Idd = $_GET['edit'];
$account = $conn->prepare("SELECT * FROM out_patient_profile as sp 
INNER JOIN dental_examination as de ON sp.op_id =de.op_id
WHERE sp.op_id = '$Idd'");
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
$presentaddress =$result['presentaddress'];
$contactno =$result['contactno'];
$guardian =$result['guardian'];
$guardno =$result['guardno'];


$Gingivitis = $result['Gingivitis'];
$Early_Periodontitis = $result['Early_Periodontitis'];
$Moderate_Periodontitis = $result['Moderate_Periodontitis'];
$Advance_Periodontitis = $result['Advance_Periodontitis'];
$Class_Molar = $result['Class_Molar'];
$Overjet = $result['Overjet'];
$Overbite = $result['Overbite'];
$Midline_Deviation = $result['Midline_Deviation'];
$Orthodontic = $result['Orthodontic'];
$Stayplate = $result['Stayplate'];
$Others = $result['Others'];
$Others_Specify = $result['Others_Specify'];
$Clenching = $result['Clenching'];
$Clicking = $result['Clicking'];
$Trismus = $result['Trismus'];
$Muscle_Spasm = $result['Muscle_Spasm'];
$Remarks = $result['Remarks'];
$Date_Oral = date("m-d-Y");
$Dentist =$result['Dentist'];
$Dentist_lastname =$result['Dentist_lastname'];
$Dentist_middlename =$result['Dentist_middlename'];
?>



<?php
//INSERT DATA
if (isset($_POST['submitDental'])){
    include_once "assets/connection_clinic.php";
    $conn = dbConnecttt();
  //OUT PATIENT PROFILE
    
    $lastname =$_POST['lastname'];
    $firstname =$_POST['firstname'];
    $middlename =$_POST['middlename'];
    $birth_date =$_POST['birth_date'];
    $sex =$_POST['sex'];
    $civilstatus =$_POST['civilstatus'];
    $coursedepartment =$_POST['coursedepartment'];
    $presentaddress =$_POST['presentaddress'];
    $contactno =$_POST['contactno'];
    $guardian =$_POST['guardian'];
    $guardno =$_POST['guardno'];
    

    //DENTAL EXAMINATION
    $Gingivitis = $_POST['Gingivitis'];
    $Early_Periodontitis = $_POST['Early_Periodontitis'];
    $Moderate_Periodontitis = $_POST['Moderate_Periodontitis'];
    $Advance_Periodontitis = $_POST['Advance_Periodontitis'];
    $Class_Molar = $_POST['Class_Molar'];
    $Overjet = $_POST['Overjet'];
    $Overbite = $_POST['Overbite'];
    $Midline_Deviation = $_POST['Midline_Deviation'];
    $Orthodontic = $_POST['Orthodontic'];
    $Stayplate = $_POST['Stayplate'];
    $Others = $_POST['Others'];
    $Others_Specify = $_POST['Others_Specify'];
    $Clenching = $_POST['Clenching'];
    $Clicking = $_POST['Clicking'];
    $Trismus = $_POST['Trismus'];
    $Muscle_Spasm = $_POST['Muscle_Spasm'];
    $Remarks = $_POST['Remarks'];
    $Date_Oral = date("m-d-Y");
    $Dentist =$_SESSION['firstname'];
    $Dentist_lastname =$_SESSION['lastname'];
    $Dentist_middlename =$_SESSION['middlename'];
  
    $Out_patient_profile = $conn->prepare("INSERT INTO out_patient_profile (lastname,firstname,middlename,birth_date,sex,civilstatus,coursedepartment,
    religious,presentaddress,contactno,guardian,guardno,permanentaddress,peraddno)
    VALUES ('$lastname', '$firstname','$middlename','$birth_date','$sex','$civilstatus', '$coursedepartment','$religious','$presentaddress',
    '$contactno','$guardian','$guardno','$permanentaddress','$peraddno')");
     $Out_patient_profile->execute(); 
    $op_id = $conn->lastInsertId();


    $Dental_examination = $conn->prepare("INSERT INTO dental_examination (Gingivitis,Early_Periodontitis,Moderate_Periodontitis,Advance_Periodontitis,Class_Molar,
    Overjet,Overbite,Midline_Deviation,Orthodontic,Stayplate,Others,Others_Specify,Clenching,Clicking,Trismus,
    Muscle_Spasm,Remarks,Date_Oral,Dentist,Dentist_lastname,Dentist_middlename,op_id)
    VALUES ('$Gingivitis','$Early_Periodontitis','$Moderate_Periodontitis','$Advance_Periodontitis','$Class_Molar','$Overjet',
    '$Overbite','$Midline_Deviation','$Orthodontic','$Stayplate','$Others','$Others_Specify',
    '$Clenching','$Clicking','$Trismus','$Muscle_Spasm','$Remarks','$Date_Oral',
    '$Dentist','$Dentist_lastname','$Dentist_middlename','$op_id')");
     $Dental_examination->execute();

   


    if( $Out_patient_profile && $Dental_examination)
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
            window.location = "out_patient_dental.php";
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