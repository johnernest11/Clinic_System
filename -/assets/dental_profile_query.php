<?php
//HIDE ERROR
// error_reporting(0);
// ini_set('display_errors', 0);

//FETCH ALL THE DATA IN MLUC SRIS
include_once "connection_sris.php";
$conn = dbConnectt();
$Id = $_POST['Id_No'];
$account = $conn->prepare("SELECT * FROM student_profile as sp INNER JOIN courses as c ON sp.course_no = c.course_no
WHERE sp.id_no = :id");
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
//INSERT DATA
if (isset($_POST['dentalSubmit'])){
    include_once "assets/connection_clinic.php";
    $conn = dbConnecttt();
  //OUT PATIENT PROFILE
    
  $id_no=$_POST['id_no'];


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
    $date_examined = date("Y-m-d");
    $Dentist =$_SESSION['firstname'];
    $Dentist_lastname =$_SESSION['lastname'];
    $Dentist_middlename =$_SESSION['middlename'];
    

    $Dental_examination = $conn->prepare("INSERT INTO dental_examination (Gingivitis,Early_Periodontitis,Moderate_Periodontitis,Advance_Periodontitis,Class_Molar,
    Overjet,Overbite,Midline_Deviation,Orthodontic,Stayplate,Others,Others_Specify,Clenching,Clicking,Trismus,
    Muscle_Spasm,Remarks,date_examined,Dentist,Dentist_lastname,Dentist_middlename,id_no)
    VALUES ('$Gingivitis','$Early_Periodontitis','$Moderate_Periodontitis','$Advance_Periodontitis','$Class_Molar','$Overjet',
    '$Overbite','$Midline_Deviation','$Orthodontic','$Stayplate','$Others','$Others_Specify',
    '$Clenching','$Clicking','$Trismus','$Muscle_Spasm','$Remarks','$date_examined',
    '$Dentist','$Dentist_lastname','$Dentist_middlename','$id_no')");
     $Dental_examination->execute();

   


    if($Dental_examination)
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
            window.location = "dashboardd.php";
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








