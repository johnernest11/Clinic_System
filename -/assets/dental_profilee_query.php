<?php


//FETCH ALL THE DATA IN MLUC SRIS
include_once "connection_multi.php";
$conn = dbConnectMulti();
$Idd = $_POST['dd_id'];
$account = $conn->prepare("SELECT sp.*,co.*,de.* FROM mluc_sris.student_profile as sp 
INNER JOIN mluc_sris.courses as co ON co.course_no = sp.course_no
INNER JOIN clinic.dental_examination as de ON sp.id_no =de.id_no
WHERE de.dd_id = :id");
$account->execute(['id'=>$Idd]);
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


$course_no =$result['course_no'];
$course_name=$result['course_name'];
$course_type_no=$result['course_type_no'];
$shortcut=$result['shortcut'];
$college_no=$result['college_no'];
$no_yrs=$result['no_yrs'];
$dept_no=$result['dept_no'];
$inactive=$result['inactive'];



$de_id=$result['dd_id'];
$Gingivitis=$result['Gingivitis'];
$Early_Periodontitis=$result['Early_Periodontitis'];
$Moderate_Periodontitis=$result['Moderate_Periodontitis'];
$Advance_Periodontitis=$result['Advance_Periodontitis'];
$Class_Molar=$result['Class_Molar'];
$Overjet=$result['Overjet'];
$Overbite =$result['Overbite'];
$Midline_Deviation =$result['Midline_Deviation'];
$Orthodontic =$result['Orthodontic'];
$Stayplate =$result['Stayplate'];
$Others =$result['Others'];
$Others_Specify =$result['Others_Specify'];
$Clenching =$result['Clenching'];
$Clicking =$result['Clicking'];
$Trismus =$result['Trismus'];
$Muscle_Spasm = $result['Muscle_Spasm']; 
$REMARKS = $result['Remarks'];
$Dentist = $result['Dentist'];
$Dentist_lastname = $result['Dentist_lastname'];
$Dentist_middlename = $result['Dentist_middlename'];
$Date_Oral = $result['date_examined'];







?>




