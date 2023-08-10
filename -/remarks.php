
<?php
include "sidebar1.php";
include "assets/medical_profilee_query.php";
// include "assets/student_profile.php";
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
      
      <br>
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
                                <!-- <h5><b><?php echo date("m-d-Y");?></b></h5><hr> -->
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
                    
                             <!-- <input type="text"  class="form-control" id="validationCustom01" name="id_no" value="<?php echo$pe_id;?>" > -->
                             <div class="col-md-2">
                                <p><b>NAME:</b></p>
                                <label for="validationDefault01" class="form-label">(PRINT)</label>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$last_name;?></b></h6><hr>
                                <label for="validationDefault01" class="form-label">LAST</label>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$first_name;?></b></h6><hr>
                                <label for="validationDefault02" class="form-label">FIRST</label>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$mid_name;?></b></b></h6><hr>
                                <label for="validationDefault01" class="form-label">MIDDLE</label>
                                
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                    
                             
                            <div class="col-md-1">
                                <h6>Age: <b><?php echo date_diff(date_create($date_birth), date_create('today'))->y;?></b></h6><hr>
                            </div>
                            <div class="col-md-1">
                                <h6>Sex: <b><?php echo$sex;?></b></h6><hr>
                            </div>
                            <div class="col-md-2">
                                <h6>Civil Status: <b><?php echo$civil_status;?></b></b></h6><hr>
                                
                            </div>
                            <div class="col-md-8">
                                <h6>Course/Department: <b><?php echo$course_name;?> </b></b></h6><hr>
                                
                            </div>
                    </div>

                    <div class="form-row">
                             <div class="col-md-6">
                                <h6>Religious Affiliation:  <b><?php echo$religion;?></b><hr></h6>
                            </div>
                            <div class="col-md-6">
                                <h6>Date of Birth:  <b><?php echo$date_birth;?></b></h6><hr>
                            </div>
                            
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                                <h6>Present Address: <b><?php echo$barangay;?>, <?php echo$town;?> <?php echo$province;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                            <h6>Tel. No.:<b><?php echo$tel_no;?></b></h6><hr>
                            </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-6">
                                <h6>Name of Guardian:<b><?php echo$guid_name;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                                <h6>Tel. No.:<b><?php echo$guid_tel_no;?></b></h6><hr>
                            </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-6">
                             <h6>Permanent Address:<b><?php echo$barangay;?>, <?php echo$town;?> <?php echo$province;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                            <h6>Tel. No.:<b><?php echo$tel_no;?></b></h6><hr>
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
                            <input class="form-check-input" type="checkbox" id="Vacation" name="Allergies" value="Yes" <?php echo$Allergies =='Yes' ? 'checked' : '';?> >
                            <label class="form-check-label" for="Vacation"><h6><b>1. Allergies</b><small> (specify)</small></h6> </label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Allergies_specify"  class="form-control" value="<?php echo$Allergies_specify;?>">     
                    </div>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Mandatory" name="Bronchial_Asthma" value="Yes" <?php echo$Bronchial_Asthma =='Yes' ? 'checked' : '';?> >
                            <label class="form-check-label" for="Mandatory"><h6><b>2. Bronchial Asthma </b> </h6></label>
                            </fieldset>
                    <div class="input-group">
                             <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Sick" name="Heart_Disease" value="Yes" <?php echo$Heart_Disease =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Sick"><h6><b>3. Heart Disease </b><small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Heart_Disease_specify"  class="form-control" value="<?php echo$Heart_Disease_specify;?>">     
                    </div>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Maternity" name="Diabetes_Mellitus" value="Yes" <?php echo$Diabetes_Mellitus =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Maternity"><h6><b>4. Diabetes Mellitus</b></h6> </label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Paternity" name="Seizure_Disorder" value="Yes" <?php echo$Seizure_Disorder =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Paternity"><h6><b>5. Seizure Disorder</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Special" name="Hypertension" value="Yes" <?php echo$Hypertension =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Special"><h6><b>6. Hypertension</b></h6></label>
                            </fieldset>
                    <div class="input-group">
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Solo" name="Bleeding_Disorder" value="Yes" <?php echo$Bleeding_Disorder =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Solo"><h6><b>7. Bleeding Disorder</b> <small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Bleeding_Disorder_specify"  class="form-control"  value="<?php echo$Bleeding_Disorder_specify;?>">
                    </div>
                    </div>
                    <div class="col-md-6">
                            <br><br>
                            <br>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Mumps" name="Mumps" value="Yes" <?php echo$Mumps =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Mumps"><h6><b>8. Mumps</b></h6> </label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Measles" name="Measles" value="Yes" <?php echo$Measles =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Measles"><h6><b>9. Measles</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Chicken_Pox" name="Chicken_Pox" value="Yes" <?php echo$Chicken_Pox =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Chicken_Pox"><h6><b>10. Chicken Pox</b></h6></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Tuberculosis" name="Tuberculosis" value="Yes" <?php echo$Tuberculosis =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Tuberculosis"><h6><b>11. Tuberculosis</b></h6></label>
                            </fieldset>
                            <div class="input-group">
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Other" name="Other" value="Yes" <?php echo$Other =='Yes' ? 'checked' : '';?>>
                            <label class="form-check-label" for="Other"><h6><b>12. Other</b> <small>(specify)</small></h6></label>
                            </fieldset>
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Other_specify"  class="form-control" value="<?php echo$Other_specify;?>">
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
                            <input class="form-check-input" type="checkbox" id="Accident_operationYes" name="Accident_operation[]" value="Yes" <?php echo$Accident_operation =='Yes' ? 'checked' : '';?> >
                            <label class="form-check-label" for="Accident_operationYes"><h6><b>Yes</b></h6> </label>
                            <input class="form-check-input" type="checkbox" id="Accident_operationNo" name="Accident_operation[]" value="No" <?php echo$Accident_operation =='No' ? 'checked' : '';?> >
                            <label class="form-check-label" for="Accident_operationNo"><h6><b>No</b></h6> </label>
                            </fieldset> 
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>If yes, state the nature of the accident/operation and date: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Accident_operationyes"  class="form-control" value="<?php echo$Accident_operationyes ;?>">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Any vaccines received in the past?  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Vaccines"  class="form-control" value="<?php echo$Vaccines;?>">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Please identify, if any.  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Vaccinesyes"  class="form-control" value="<?php echo$Vaccinesyes;?>"> 
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Are you taking any medication?  </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Mental_illness"  class="form-control" value="<?php echo$Mental_illness;?>">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Please enumerate, if any.   </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Medicationyes"  class="form-control" value="<?php echo$Medicationyes;?>">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Do you have a family history of mental illness? (e.g. depression) </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Mental_illness"  class="form-control" value="<?php echo$Mental_illness;?>">
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
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Height"  class="form-control" value="<?php echo$Height;?>">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>ft</b></h6> </label>
                            </fieldset>    
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>BP:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="BBP"  class="form-control" value="<?php echo$BP;?>">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>mmHg</b></h6> </label>
                            </fieldset>    
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>RR:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="RR"  class="form-control" value="<?php echo$RR ;?>">
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/min</b></h6> </label>
                            </fieldset>     
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>General Survey: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="General_Survey"  class="form-control" value="<?php echo$General_Survey;?>">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Skin: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Skin"  class="form-control" value="<?php echo$Skin;?>">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>HEENT:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="HEENT"  class="form-control" value="<?php echo$HEENT;?>">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Chest and Lungs: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Chest_Lungs"  class="form-control" value="<?php echo$Chest_Lungs;?>">
                            </div>
                    
                    </div>
                    <div class="col-md-6">
                        <br>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Weight:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Weight"  class="form-control" value="<?php echo$Weight;?>">
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/kg</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>CR:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="CR"  class="form-control" value="<?php echo$CR;?>">
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>/min</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Temperature:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Temperature"  class="form-control" value="<?php echo$Temperature;?>">
                            </fieldset>   
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>C</b></h6> </label>
                            </fieldset>      
                        </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Heart: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Heart"  class="form-control" value=" <?php echo$Heart;?>">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Abdomen: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Abdomen"  class="form-control" value="<?php echo$Abdomen ;?>">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Genito-Urinary System:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Genito_Urinary_System"  class="form-control" value="<?php echo$Genito_Urinary_System;?>">
                            </div>
                            <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Extremities: </b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="Extremities"  class="form-control" value="<?php echo$Extremities;?>">
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
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="REMARKS"  class="form-control" value="<?php echo$REMARKS;?>">
                            </div>
                  
                   
                    

                       
                    </div>
                    
                           
                            
                            <!-- <input type="hidden" class="form-control" id="validationDefault03" name="leave_reco_head" value="Pending" required>
                            <input type="hidden" class="form-control" id="validationDefault03" name="month_date" value="<?php echo date("F")?>" required> -->
                    </div>
                    <div class="form-row">
                    <div class="col-lg-6 ">
                    </div>

                    <div class="col-lg-6 ">
                    <br>
                    <br>
                                
                                <br><h6 class="text-center"><b><u> <?php echo$Doctor;?> <?php echo$Doctor_middlename;?> <?php echo$Doctor_lastname;?></u></b></h6>
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
                            <a class="btn btn-dark-green  btn-rounded" href="fpdf/MEDICAL.php?edit=<?php echo $result['pe_id'];?>" target="_blank"> print </a>
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
   

