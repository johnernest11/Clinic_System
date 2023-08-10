
<?php
include "sidebar1.php";
include "assets/out_medicall_query.php";

?>
<main>
    <style type="text/css">
      #logo {
  position: absolute;
  left: 130px;
  top: 63px;
  z-index: 1;
}
    </style>
<!-- Begin Page Content -->
<div class="row ">
      <!-- Page Heading -->
      
    
      <!-- <h1 class="h3 mb-2 text-gray-800">APPLICATION FORM FOR LEAVE</h1> -->
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
                                <!-- <h5><b><?php echo date("Y-m-d");?></b></h5><hr> -->
                                 <h6><b><?php echo$date_examined;?></b></h6><hr>
                                <label for="validationDefault01" class="form-label text-center">DATE</label>
                            </div>
                        </div>
                        <div class="col-3">
                        <img src="../PICTURE/default.png"  width="150" height="150">
                        </div>

                    </div>

                    <h6><b>I. PERSONAL INFORMATION</b></h6><br>
                    <div class="form-row">
                    
                             <input type="hidden"  class="form-control" id="validationCustom01" name="Pe_No" value="<?php echo$pe_id;?>" >
                             <div class="col-md-2">
                                <p><b>NAME:</b></p>
                                <label for="validationDefault01" class="form-label">(PRINT)</label>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$lastname;?></b></h6><hr>
                                <label for="validationDefault01" class="form-label">LAST</label>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$firstname;?></b></h6><hr>
                                <label for="validationDefault02" class="form-label">FIRST</label>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$middlename;?></b></b></h6><hr>
                                <label for="validationDefault01" class="form-label">MIDDLE</label>
                                
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                    
                             
                            <div class="col-md-1">
                                <h6>Age: <b><?php echo$Age;?></b></h6><hr>
                            </div>
                            <div class="col-md-1">
                                <h6>Sex: <b><?php echo$sex;?></b></h6><hr>
                            </div>
                            <div class="col-md-2">
                                <h6>Civil Status: <b><?php echo$civilstatus;?></b></b></h6><hr>
                                
                            </div>
                            <div class="col-md-8">
                                <h6>Course/Department: <b><?php echo$coursedepartment;?> </b></b></h6><hr>
                                
                            </div>
                    </div>

                    <div class="form-row">
                             <div class="col-md-6">
                                <h6>Religious Affiliation:  <b><?php echo$religious;?></b><hr></h6>
                            </div>
                            <div class="col-md-6">
                                <h6>Date of Birth:  <b><?php echo$birth_date;?></b></h6><hr>
                            </div>
                            
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                                <h6>Present Address: <b><?php echo$presentaddress;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                                <h6>Tel. No.:  <b><?php echo$contactno;?></b></h6><hr>
                            </div>
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                                <h6>Name of Guardian: <b><?php echo$guardian;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                                <h6>Tel. No.: <b><?php echo$guardno;?></b></h6><hr>
                            </div>
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                                <h6>Permanent Address: <b><?php echo$permanentaddress;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                                <h6>Tel. No.: <b><?php echo$peraddno;?></b></h6><hr>
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
                            <input class="form-check-input" type="checkbox" id="Vacation" name="Allergies" value="Yes" <?php echo$Allergies =='Yes' ? 'checked' : '';?>  onclick="return false;">
                            <label class="form-check-label" for="Vacation"><h6><b>1. Allergies</b><small> (specify)</small></h6> </label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Allergies_specify"  class="form-control" value="<?php echo$Allergies_specify;?>" disabled>     
                    </div>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Mandatory" name="Bronchial_Asthma" value="Yes" <?php echo$Bronchial_Asthma =='Yes' ? 'checked' : '';?>  onclick="return false;">
                            <label class="form-check-label" for="Mandatory"><h6><b>2. Bronchial Asthma </b> </h6></label>
                            </fieldset>
                    <div class="input-group">
                             <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Sick" name="Heart_Disease" value="Yes" <?php echo$Heart_Disease =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Sick"><h6><b>3. Heart Disease </b><small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Heart_Disease_specify"  class="form-control" value="<?php echo$Heart_Disease_specify;?>" disabled>     
                    </div>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Maternity" name="Diabetes_Mellitus" value="Yes" <?php echo$Diabetes_Mellitus =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Maternity"><h6><b>4. Diabetes Mellitus</b></h6> </label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Paternity" name="Seizure_Disorder" value="Yes" <?php echo$Seizure_Disorder =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Paternity"><h6><b>5. Seizure Disorder</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Special" name="Hypertension" value="Yes" <?php echo$Hypertension =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Special"><h6><b>6. Hypertension</b></h6></label>
                            </fieldset>
                    <div class="input-group">
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Solo" name="Bleeding_Disorder" value="Yes" <?php echo$Bleeding_Disorder =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Solo"><h6><b>7. Bleeding Disorder</b> <small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Bleeding_Disorder_specify"  class="form-control"  value="<?php echo$Bleeding_Disorder_specify;?>" disabled>
                    </div>
                    </div>
                    <div class="col-md-6">
                            <br><br>
                            <br>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Maternity" name="Mumps" value="Yes" <?php echo$Mumps =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Maternity"><h6><b>8. Mumps</b></h6> </label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Paternity" name="Measles" value="Yes" <?php echo$Measles =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Paternity"><h6><b>9. Measles</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Special" name="Chicken_Pox" value="Yes" <?php echo$Chicken_Pox =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Special"><h6><b>10. Chicken Pox</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Special" name="Tuberculosis" value="Yes" <?php echo$Tuberculosis =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Special"><h6><b>11. Tuberculosis</b></h6></label>
                            </fieldset>
                            <div class="input-group">
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Solo" name="Other" value="Yes" <?php echo$Other =='Yes' ? 'checked' : '';?> onclick="return false;">
                            <label class="form-check-label" for="Solo"><h6><b>12. Other</b> <small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Other_specify"  class="form-control" value="<?php echo$Other_specify;?>" disabled>
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
                            <input class="form-check-input" type="checkbox" id="Vacation" name="Accident_operation[]" value="Yes" <?php echo$Accident_operation =='Yes' ? 'checked' : '';?>  onclick="return false;">
                            <label class="form-check-label" for="Vacation"><h6><b>Yes</b></h6> </label>
                            <input class="form-check-input" type="checkbox" id="Vacation" name="Accident_operation[]" value="No" <?php echo$Accident_operation =='No' ? 'checked' : '';?>  onclick="return false;">
                            <label class="form-check-label" for="Vacation"><h6><b>No</b></h6> </label>
                            </fieldset> 
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>If yes, state the nature of the accident/operation and date: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Accident_operationyes"  class="form-control" value="<?php echo$Accident_operationyes ;?>" disabled>
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Any vaccines received in the past?  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Vaccines"  class="form-control" value="<?php echo$Vaccines;?>" disabled>
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Please identify, if any.  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Vaccinesyes"  class="form-control" value="<?php echo$Vaccinesyes;?>" disabled> 
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Are you taking any medication?  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Mental_illness"  class="form-control" value="<?php echo$Mental_illness;?>" disabled>
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Please enumerate, if any.   </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Medicationyes"  class="form-control" value="<?php echo$Medicationyes;?>" disabled>
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Do you have a family history of mental illness? (e.g. depression) </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Mental_illness"  class="form-control" value="<?php echo$Mental_illness;?>" disabled>
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
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Height"  class="form-control" value="<?php echo$Height;?>" disabled>
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>ft</b></h6> </label>
                            </fieldset>    
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>BP:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="B"  class="form-control" value="<?php echo$BP;?>" disabled>
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>mmHg</b></h6> </label>
                            </fieldset>    
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>RR:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="RR"  class="form-control" value="<?php echo$RR ;?>" disabled>
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/min</b></h6> </label>
                            </fieldset>     
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>General Survey: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="General_Survey"  class="form-control" value="<?php echo$General_Survey;?>" disabled>
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Skin: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Skin"  class="form-control" value="<?php echo$Skin;?>" disabled>
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>HEENT:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="HEENT"  class="form-control" value="<?php echo$HEENT;?>" disabled>
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Chest and Lungs: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Chest_Lungs"  class="form-control" value="<?php echo$Chest_Lungs;?>" disabled>
                            </div>
                    
                    </div>
                    <div class="col-md-6">
                        <br>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Weight:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Weight"  class="form-control" value="<?php echo$Weight;?>" disabled>
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/kg</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>CR:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="CR"  class="form-control" value="<?php echo$CR;?>" disabled>
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/min</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Temperature:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Temperature"  class="form-control" value="<?php echo$Temperature;?>" disabled>
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>C</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Heart: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Heart"  class="form-control" value=" <?php echo$Heart;?>" disabled>
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Abdomen: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Abdomen"  class="form-control" value="<?php echo$Abdomen ;?>" disabled>
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Genito-Urinary System:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Genito_Urinary_System"  class="form-control" value="<?php echo$Genito_Urinary_System;?>" disabled>
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Extremities: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Extremities"  class="form-control" value="<?php echo$Extremities;?>" disabled>
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
                        
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>REMARKS: </b></h6> </label>
                            </fieldset>   
                            <?php
                            ob_start();
                            include_once "assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT * FROM account 
                            WHERE Id = $_SESSION[Id];");
                                
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                $Position= $result['Position'];
                                $Doctor1 =" 
                                <input type='text' class='form-control border-top-0 border-right-0 border-left-0 ' id='form1' name='REMARKS'  class='form-control' value=' $REMARKS' required> 
                                <input type='hidden' class='form-control border-top-0 border-right-0 border-left-0 ' id='form1' name='Status'  class='form-control' value='COMPLETED'>
                                <a class='btn btn-info' href='#' data-toggle='modal' data-target='#UpdateRemarks1'>
                                    <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Update 
                                </a>   
                                            ";
                                $Nurse ="    
                                <input type='text' class='form-control border-top-0 border-right-0 border-left-0 ' id='form1' name='REMARKS'  class='form-control' value=' $REMARKS' disabled> ";
                                if($Position == 'Doctor'){
                                    $Position =  $Doctor1;
                                }else if($Position == 'Nurse') {
                                $Position =$Nurse;
                                }
                                  else{
                                      
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



                     <!-- MODAL -->
                     <div class="modal fade" id="UpdateRemarks1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                     <button type="submit" class="btn btn-primary"  name="UpdateRemarks1"  ><i class='fas fa-print'></i> Yes</button>
                </div>
            </div>
        </div>
    </div>

                            </form>
                            <form action="fpdf/Out_Medical.php" method="POST" target='_blank'>
                    <div class="form-row">
                    <div class="col-lg-6 ">
                    </div>

                    <div class="col-lg-6 ">
                    <br>
                    <br>
                                
                                <br><h6 class="text-center"><b><u> <?php echo$Doctor;?> <?php echo$Doctor_middlename;?> <?php echo$Doctor_lastname;?> </u></b></h6>
                                <h6 class="text-center" ><b>MEDICAL OFFICER</b></h6>
                            
                           
                    </div>
                    
                    
                    <div class="col-lg-6 col-md-6 mb-6">
            
                           
                    </div>

                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row" >
                            <div class="col-6">
                            <p>DMMMSU-MDS-F001</p>
                            <p>Rev No. 00 (07.15.2020)</p>
                            </div>
                            <div class="col-6 text-right">
                            <?php
                            ob_start();
                            include_once "assets/connection.php";
                            $conn = dbConnect();
                            $ID =$_POST['Pe_No'];
                            $account = $conn->prepare("SELECT * FROM physical_examination 
                            WHERE pe_id = $ID;");
                                
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){

                                $Status= $result['Status'];
                                $COMPLETED ='

                                <input type="hidden" value="'.$result["pe_id"].'" name="Pe_No"/>
                                <button type = "submit" class="btn btn-warning" ><i class="fas fa-print"> Print</i> </button> ';
                                $ONGOING ="    
                                ";
                                if($Status == 'COMPLETED'){
                                    $Status =  $COMPLETED;
                                }else if($Status == 'ONGOING') {
                                $Status =$ONGOING;
                                }
                                  else{
                                      
                                  }  
                                echo '<tr>
                                        <td>'.$Status.'</td>
                                      </tr>';
                                }
                                
                            ob_end_flush();
                            ?>
                            </div>
                    </div>

                   
                   
                </form>
            </div>
        </div>
        <br>


        <div class="card-cascade narrower col-lg-2">
            <div class="tab-content" id="nav-tabContent">
   
        </div>
        </div>


</div>
</div>

</main>
   

