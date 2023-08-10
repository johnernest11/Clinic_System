
<?php
session_start();
if(isset($_SESSION['Doctor_login'])){
  header("location:-/home.php");
    } 
        else {

        }

//Getting Input value
if(isset($_POST['login'])){
 
  $username =$_REQUEST["username"];
  $password =$_REQUEST["password"];
  $pass = $password;
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 include_once "connection.php";
 $conn = dbConnect();
 $result=$conn->prepare("SELECT Id, lastname,firstname,middlename,role,Position
 FROM account WHERE username=:db_username AND password=:db_password");
 $result->bindParam(":db_username",$username);
 $result->bindParam(":db_password",$pass);
 $result->execute();
 $rows = $result->fetch(PDO::FETCH_ASSOC);
 $count=$result->rowCount();
 if($count==1){
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['Id']=$rows['Id'];
    $_SESSION['role']=$rows['role'];
    $_SESSION['Position']=$rows['Position'];
    $_SESSION['lastname']=$rows['lastname'];
    $_SESSION['firstname']=$rows['firstname'];
    $_SESSION['middlename']=$rows['middlename'];

    $Id=$_SESSION['Id'];
   $role=$_SESSION['role'];
   //Redirecting User Based on Role
    switch($role){
  case 'User':
    $_SESSION["Doctor_login"]=$Id;
    $_SESSION["Doctor_role"]=$role;
    header('location:-/home.php');
  break;
  case 'Secretary':
    $_SESSION["Secretary_login"]=$Id;
    $_SESSION["Secretary_role"]=$role;
    header('location:SECRETARY/page/profile/dashboard.php');
  break;
         }
         
 }else{
   
   
 $error='<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Incorrect!</strong> Password or Username.
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
</div>';
 }
}
}
?>