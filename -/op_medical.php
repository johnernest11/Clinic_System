
<?php
include "sidebar1.php";
include "assets/out_medical_query.php";
?>
<main>
    <style type="text/css">
      #logo {
  position: absolute;
  left: 150px;
  top: 60px;
  z-index: 1;
}
    </style>
<!-- Begin Page Content -->
<div class="row ">
      <!-- Page Heading -->
      
      <br>
      <hr>
            <div class="card card-cascade narrower col-lg-8">
              <div class="card-body card-body-cascade ">
                <form method="POST">

                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    
                <img src="../PICTURE/DMMMSULogo.png" id="logo" width="150" height="80">

                  <center> <p> <br>
                  <h4><b>PERSONAL DATA SHEET</b></h4></center>
                  <br>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-4 text-center">
                            <div >
                                <br>
                                <h6><b><?php echo date("Y-m-d");?></b></h6><hr>
                                <label for="validationDefault01" class="form-label text-center">DATE</label>
                            </div>
                        </div>
                        <div class="col-3">
                        <img src="../PICTURE/default.png"  width="150" height="150">
                        </div>

                    </div>

                    <h4><b>I. PERSONAL INFORMATION</b></h4><br>
                    <div class="form-row">
                    
                             <!-- <input type="text"  class="form-control" id="validationCustom01" name="id_no" value="<?php echo$id_no;?>" > -->
                             <div class="col-md-1">
                                <h6><b>NAME:</b></h6>
                                <label for="validationDefault01" class="form-label">(PRINT)</label>
                            </div>
                            <div class="col-md-3">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="lastname" name="lastname"  class="form-control" value="" required>
                                <label for="validationDefault01" class="form-label">LAST</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="firstname" name="firstname"  class="form-control" value="" required>
                                <label for="validationDefault02" class="form-label">FIRST</label>
                            </div>
                            <div class="col-md-3">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="middlename" name="middlename"  class="form-control" value="" required>
                                <label for="validationDefault01" class="form-label">MIDDLE</label>
                                
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                            <div class="col-md-2">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="sex" name="sex"  class="form-control" value="" >
                                <h6>Sex: <b></b></h5>
                            </div>
                            <div class="col-md-3">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="civilstatus" name="civilstatus"  class="form-control" value="" >
                                <h6>Civil Status: <b></b></b></h6>
                                
                            </div>
                            <div class="col-md-7">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="coursedepartment" name="coursedepartment"  class="form-control" value="">
                                <h6>Course/Department: <b> </b></b></h6>
                                
                            </div>
                    </div>

                    <div class="form-row">
                             <div class="col-md-6">
                             <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="religious" name="religious"  class="form-control" value="" required>
                                <h6>Religious Affiliation:  :<b></b></h6>
                            </div>
                            <div class="col-md-6">
                            <input type="date" class="form-control border-top-0 border-right-0 border-left-0 " id="birth_date" name="birth_date"  class="form-control" value="" required>
                                <h6>Date of Birth: : <b></b></h6>
                            </div>
                            
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                             <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="presentaddress" name="presentaddress"  class="form-control" value="" required>
                                <h6>Present Address:<b></b></h6>
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="contactno" name="contactno"  class="form-control" value="">
                                <h6>Tel. No.:<b><u></u></b></h6>
                            </div>
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                             <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="guardian" name="guardian"  class="form-control" value="" required>
                                <h6>Name of Guardian:<b></b></h6>
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="guardno" name="guardno"  class="form-control" value="" required>
                                <h6>Tel. No.:<b><u></u></b></h6>
                            </div>
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                             <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="permanentaddress" name="permanentaddress"  class="form-control" value="" required>
                                <h6>Permanent Address: <b></b></h6>
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="peraddno" name="peraddno"  class="form-control" value="">
                                <h6>Tel. No.:<b><u></u></b></h6>
                            </div>
                    </div>
                    <br>
                    <h4><b>II. PAST MEDICAL HISTORY</b></h4><br> 
                    <div class="form-row">
                    <div class="col-lg-6 col-md-6 mb-6 ">
                    <h5 for="validationDefault03" class="form-label">Check (√) disease/illness you have/had.</h5>
                    <br>
                    <div class="input-group">
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Allergies" name="Allergies" value="Yes"  >
                            <label class="form-check-label" for="Allergies"><h6><b>1. Allergies</b><small> (specify)</small></h6> </label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Allergies_specify"  class="form-control" value="">     
                    </div>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Bronchial_Asthma" name="Bronchial_Asthma" value="Yes"  >
                            <label class="form-check-label" for="Bronchial_Asthma"><h6><b>2. Bronchial Asthma </b> </h6></label>
                            </fieldset>
                    <div class="input-group">
                             <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Heart_Disease" name="Heart_Disease" value="Yes">
                            <label class="form-check-label" for="Heart_Disease"><h6><b>3. Heart Disease </b><small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Heart_Disease_specify"  class="form-control" value="">     
                    </div>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Diabetes_Mellitus" name="Diabetes_Mellitus" value="Yes" >
                            <label class="form-check-label" for="Diabetes_Mellitus"><h6><b>4. Diabetes Mellitus</b></h6> </label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Seizure_Disorder" name="Seizure_Disorder" value="Yes" >
                            <label class="form-check-label" for="Seizure_Disorder"><h6><b>5. Seizure Disorder</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Hypertension" name="Hypertension" value="Yes" >
                            <label class="form-check-label" for="Hypertension"><h6><b>6. Hypertension</b></h6></label>
                            </fieldset>
                    <div class="input-group">
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Bleeding_Disorder" name="Bleeding_Disorder" value="Yes" >
                            <label class="form-check-label" for="Bleeding_Disorder"><h6><b>7. Bleeding Disorder</b> <small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Bleeding_Disorder_specify"  class="form-control"  value="">
                    </div>
                    </div>
                    <div class="col-md-6">
                            <br><br>
                            <br>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Mumps" name="Mumps" value="Yes" >
                            <label class="form-check-label" for="Mumps"><h6><b>8. Mumps</b></h6> </label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Measles" name="Measles" value="Yes" >
                            <label class="form-check-label" for="Measles"><h6><b>9. Measles</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Chicken_Pox" name="Chicken_Pox" value="Yes" >
                            <label class="form-check-label" for="Chicken_Pox"><h6><b>10. Chicken Pox</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Tuberculosis" name="Tuberculosis" value="Yes" >
                            <label class="form-check-label" for="Tuberculosis"><h6><b>11. Tuberculosis</b></h6></label>
                            </fieldset>
                            <div class="input-group">
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Other" name="Other" value="Yes" >
                            <label class="form-check-label" for="Other"><h6><b>12. Other</b> <small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Other_specify"  class="form-control" value="">
                            </div>
                            <br>
                            <br>
                                
                    </div>
                    </div>
                    
                    
                    <div class="form-row ">
                    <div class="col-lg-12 col-md-12 mb-12 ">
                        <br>
                    <br>
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Did you have any accident/operation in the past?</b></h6> </label>
                            <input class="form-check-input" type="checkbox" id="Accident_operationYes" name="Accident_operation[]" value="Yes" >
                            <label class="form-check-label" for="Accident_operationYes"><h6><b>Yes</b></h6> </label>
                            <input class="form-check-input" type="checkbox" id="Accident_operationNo" name="Accident_operation[]" value="No" >
                            <label class="form-check-label" for="Accident_operationNo"><h6><b>No</b></h6> </label>
                            </fieldset> 
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>If yes, state the nature of the accident/operation and date: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Accident_operationyes"  class="form-control" value="">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Any vaccines received in the past?  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Vaccines"  class="form-control" value="">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Please identify, if any.  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Vaccinesyes"  class="form-control" value=""> 
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Are you taking any medication?  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Medication"  class="form-control" value="">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Please enumerate, if any.   </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Medicationyes"  class="form-control" value="">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Do you have a family history of mental illness? (e.g. depression) </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Mental_illness"  class="form-control" value="">
                            </div>
                                   
                    </div>
                    </div>
                    
                    <br>
                    <h4><b>III. PHYSICAL EXAMINATION</b></h4><br> 
                    <div class="form-row">
                    <div class="col-lg-6 col-md-6 mb-6 ">
                    <br>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Height:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Height"  class="form-control" value="">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>ft</b></h6> </label>
                            </fieldset>    
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>BP:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="BP"  class="form-control" value="">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>mmHg</b></h6> </label>
                            </fieldset>    
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>RR:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="RR"  class="form-control" value="">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/min</b></h6> </label>
                            </fieldset>     
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>General Survey: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="General_Survey"  class="form-control" value="">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Skin: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Skin"  class="form-control" value="">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>HEENT:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="HEENT"  class="form-control" value="">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Chest and Lungs: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Chest_Lungs"  class="form-control" value="">
                            </div>
                    
                    </div>
                    <div class="col-md-6">
                        <br>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Weight:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Weight"  class="form-control" value="">
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/kg</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>CR:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="CR"  class="form-control" value="">
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/min</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Temperature:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Temperature"  class="form-control" value="">
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>C</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Heart: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Heart"  class="form-control" value=" ">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Abdomen: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Abdomen"  class="form-control" value="">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Genito-Urinary System:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Genito_Urinary_System"  class="form-control" value="">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Extremities: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Extremities"  class="form-control" value="">
                            </div>
                            <br>
                            <br>
                                
                    </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">   
                    <div class="form-row">
                    <div class="col-lg-12">
                    <br>
                    <div class="input-group">  


                    <?php
                            ob_start();
                            include_once "assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT * FROM account 
                            WHERE Id = $_SESSION[Id];");
                                
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                $acc_id =$result["Id"];
                                $Position= $result['Position'];
                                $Doctor1 =" 
                                <fieldset class='form-check'>
                                <label class='form-check-label' for='Vacation'><h6><b>REMARKS: </b></h6> </label>
                                </fieldset>   
                                <input type='text' class='form-control border-top-0 border-right-0 border-left-0 ' id='form1' name='REMARKS'  class='form-control' value=''>
                                <input type='hidden' class='form-control border-top-0 border-right-0 border-left-0 ' id='form1' name='Status'  class='form-control' value='COMPLETED'>
                                 ";

                                $Nurse =" 
                                <input type='hidden' class='form-control border-top-0 border-right-0 border-left-0 ' id='form1' name='Status'  class='form-control' value='ONGOING'>
                                ";
                                
                                if($Position == 'Doctor'){
                                    $Position =  $Doctor1;
                                }else {
                                $Position =$Nurse;
                                }
                                    
                                echo '<tr>
                                        <td>'.$Position.'</td>
                                      </tr>';
                                }
                                
                            ob_end_flush();
                            ?>
                           
                            </div>
                    </div>
                            
                    </div>
                    <div class="form-row">
                    <div class="col-lg-6 ">
                    </div>

                    <div class="col-lg-6 ">
                    <br>
                    <br>
                                <br><h5 class="text-center"><b><u> <?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['middlename'] ?> <?php echo $_SESSION['lastname'] ?> </u></b></h5>
                                <h6 class="text-center" ><b>MEDICAL OFFICER</b></h6>
                    </div>
                    
                   

                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row" >
                            <div class="col-6">
                            <p>DMMMSU-MDS-F001</p>
                            <p>Rev No. 00 (07.15.2020)</p>
                            </div>
                            <div class="col-6 text-right">

                            
<!-- IF NURSE SUBMIT BUTTON WILL NOT SHOW -->

                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#confirmModa1l">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Submit
                    </a>    
                     </div>
                    </div>
                   <!-- MODAL FORM CONFIRMATION -->
                    <div class="modal fade" id="confirmModa1l" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Yes" below if you are ready to submit .</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">No</button>
                     <button type="submit" class="btn btn-primary"  name="confirmsubmit1"  >Submit</button>
                </div>
            </div>
        </div>
    </div>
                </form>
            </div>
        </div>
        <br>


        <div class="card-cascade narrower col-lg-2">
            <div class="tab-content" id="nav-tabContent">
    <!--PENDING REQUEST NAVIGATION TAB-->
   
        </div>
        </div>


</div>
</div>

</main>
   

