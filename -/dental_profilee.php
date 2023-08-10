
<?php
include "sidebar1.php";
include "assets/dental_profilee_query.php";
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
  <h4><b>ORAL EXAMINATION FORM</b></h4></center>
  <br>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <br>
    <br>
    <div class="form-row">
    
             <!-- <input type="text"  class="form-control" id="validationCustom01" name="id_no" value="<?php echo$id_no;?>" > -->
             <div class="col-md-1">
                <h6><b>Name:</b></h6>
            </div>
            <div class="col-md-3">
                <h6><b><?php echo$last_name;?></b></h6><hr>
                <label for="validationDefault01" class="form-label">Surname</label>
            </div>
            <div class="col-md-3">
                <h6><b><?php echo$first_name;?></b></h6><hr>
                <label for="validationDefault02" class="form-label">First Name</label>
            </div>
            <div class="col-md-3">
                <h6><b><?php echo$mid_name;?></b></b></h6><hr>
                <label for="validationDefault01" class="form-label">Middle Initial</label>
                
            </div>
    </div>
    <br>
    <div class="form-row">
                        <div class="col-md-4">
                            <h6>Date of Birth: <b><?php echo$date_birth;?></b></b></h6><hr>
                        </div>
                        <div class="col-md-4">
                            <h6>Age: <b><?php echo date_diff(date_create($date_birth), date_create('today'))->y;?></b></h6><hr>
                        </div>
                        <div class="col-md-4">
                            <h6>Gender: <b><?php echo$sex;?></b></b></h6><hr>   
                        </div>
                        </div>

                    <div class="form-row">
                            <div class="col-md-6">
                                <h6>Course/Occupation: <b><?php echo$course_name;?> </b></b></h6><hr>
                                
                            </div>
                            <div class="col-md-6">
                                <h6>Civil Status: <b><?php echo$civil_status;?></b><hr></h6>
                            </div>
                            
                    </div>
                        <div class="form-row">
                             <div class="col-md-6">
                                <h6>Address: <b><?php echo$barangay;?>, <?php echo$town;?> <?php echo$province;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                                <h6>Contact Number: <b><?php echo$tel_no;?></b></h6><hr>
                            </div>
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                                <h6>Name of Parent/</h6>
                                <h6>Guardian for minor: <b><?php echo$guid_name;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                                <h6>- </h6>
                                 <h6>Contact Number: <b><?php echo$guid_tel_no;?></b></h6><hr>
                            </div>
                    </div>
    <br>
    <h5><b>INTRAORAL EXAMINATION</b></h5><br> 
    <div class="form-row">
        <div class="col-2">

        </div>
        <div class="col-8">
        <img src="../PICTURE/intraoral.png"  width="100%" height="auto" class="responsive">
        </div>
    </div> 
    <br>
    <div class="form-row">
        <div class="col-3">
        <a><b>Legend:</b></a><br> 
        <a><b>V</b>-caries free</a><br> 
        <a><b>D</b>-caries indicate for filling</a><br> 
        <a><b>I</b>-caries indicated for extraction</a><br> 
        </div>
        <div class="col-3">
        <a><b></b></a><br> 
        <a><b>Condition:</b></a><br> 
        <a><b>RF</b>-Root fragment</a><br> 
        <a><b>X</b>-Extracted due to caries</a><br> 
        <a><b>XO</b>-Extracted due to other cause</a><br> 
        <a><b>M</b>-Missing tooth</a><br> 
        <a><b>AF</b>-Amalgam filled</a><br> 
        <a><b>LCF</b>-Light cure composite filled</a><br> 
        <a><b>TF</b>-Transient/temporary filled</a><br> 
        <a><b>U</b>-Unerupted</a><br> 
        </div>
        <div class="col-3">
        <a><b></b></a><br> 
        <a><b>S</b>-Sealant filled</a><br> 
        <a><b>St</b>-Supernumerary </a><br> 
        </div>
        <div class="col-3">
        <a><b></b></a><br> 
        <a><b>Prosthetics:</b></a><br> 
        <a>G<b>-Gold crown</b></a><br> 
        <a>J<b>-Jacket crown</b></a><br> 
        <a>V<b>-Veneer</b></a><br> 
        <a>AB<b>-Abutment</b></a><br> 
        <a>P<b>-Pontic</b></a><br>
        <a>FX<b>-Fixed bridge</b></a><br> 
        <a>FD<b>-Full denture</b></a><br> 
        <a>RPD<b>-Removable partial denture</b></a><br>  
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col-3">
        <fieldset class="form-check">
        <a><b>Condition:</b></a><br>
            <input class="form-check-input" type="checkbox" id="Gingivitis" name="Gingivitis" value="Yes"  <?php echo$Gingivitis =='Yes' ? 'checked' : '';?>  >
            <label class="form-check-label" for="Mandatory"><h6><b>Gingivitis</b> </h6></label>
        </fieldset>
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Early_Periodontitis" name="Early_Periodontitis" value="Yes"  <?php echo$Early_Periodontitis =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Early Periodontitis</b> </h6></label>
        </fieldset> 
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Moderate_Periodontitis" name="Moderate_Periodontitis" value="Yes" <?php echo$Moderate_Periodontitis =='Yes' ? 'checked' : '';?>  >
            <label class="form-check-label" for="Mandatory"><h6><b>Moderate Periodontitis</b> </h6></label>
        </fieldset>
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Advance_Periodontitis" name="Advance_Periodontitis" value="Yes"  <?php echo$Advance_Periodontitis =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Advance Periodontitis</b> </h6></label>
        </fieldset>
        </div>
        <div class="col-3">
        <fieldset class="form-check">
        <a><b>Occlusion:</b></a><br>
            <input class="form-check-input" type="checkbox" id="Class_(Molar)" name="Class_Molar" value="Yes" <?php echo$Class_Molar =='Yes' ? 'checked' : '';?>  >
            <label class="form-check-label" for="Mandatory"><h6><b>Class (Molar)</b> </h6></label>
        </fieldset>
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Overjet" name="Overjet" value="Yes"  <?php echo$Overjet =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Overjet</b> </h6></label>
        </fieldset> 
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Overbite" name="Overbite" value="Yes" <?php echo$Overbite =='Yes' ? 'checked' : '';?>  >
            <label class="form-check-label" for="Mandatory"><h6><b>Overbite</b> </h6></label>
        </fieldset>
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Midline_Deviation" name="Midline_Deviation" value="Yes" <?php echo$Midline_Deviation =='Yes' ? 'checked' : '';?>  >
            <label class="form-check-label" for="Mandatory"><h6><b>Midline Deviation</b> </h6></label>
        </fieldset>
        </div>
        <div class="col-3">
        <fieldset class="form-check">
        <a><b>Occlusion:</b></a><br>
            <input class="form-check-input" type="checkbox" id="Orthodontic" name="Orthodontic" value="Yes"  <?php echo$Orthodontic =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Orthodontic</b> </h6></label>
        </fieldset>
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Stayplate" name="Stayplate" value="Yes" <?php echo$Stayplate =='Yes' ? 'checked' : '';?>  >
            <label class="form-check-label" for="Mandatory"><h6><b>Stayplate</b> </h6></label>
        </fieldset> 
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Others" name="Others" value="Yes" <?php echo$Others =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Others (Specify)</b> </h6></label>
        </fieldset>
        <fieldset class="form-check">
        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="Others_Specify" name="Others_Specify"  class="form-control"  value="<?php echo$Others_Specify?>">
        </fieldset>
        </div>
        <div class="col-3">
        <fieldset class="form-check">
        <a><b>Occlusion:</b></a><br>
            <input class="form-check-input" type="checkbox" id="Clenching" name="Clenching" value="Yes" <?php echo$Clenching =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Clenching</b> </h6></label>
        </fieldset>
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Clicking" name="Clicking" value="Yes" <?php echo$Clicking =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Clicking</b> </h6></label>
        </fieldset> 
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Trismus" name="Trismus" value="Yes" <?php echo$Trismus =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Trismus</b> </h6></label>
        </fieldset>
        <fieldset class="form-check">
            <input class="form-check-input" type="checkbox" id="Muscle_Spasm" name="Muscle_Spasm" value="Yes" <?php echo$Muscle_Spasm =='Yes' ? 'checked' : '';?> >
            <label class="form-check-label" for="Mandatory"><h6><b>Muscle Spasm</b> </h6></label>
        </fieldset>
        </div>
    </div>
    
    
    
    
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">   
    <div class="form-row">
    <div class="col-lg-12">
    <br>
    <div class="input-group">  
            <fieldset class="form-check">
            <label class="form-check-label" for="Vacation"><h6><b>Remarks:</b></h6> </label>
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
                                <a class='btn btn-info' href='#' data-toggle='modal' data-target='#UpdateRemarks'>
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
                <br>
                <br>
            <fieldset class="form-check">
            <label class="form-check-label" for="Vacation"><h6><b>Date of Oral Examination: <?php echo$Date_Oral?></b></h6> </label>
            </fieldset> 
    </div>
    
           
            
            <input type="hidden" class="form-control" id="validationDefault03" name="leave_reco_head" value="Pending" required>
            <input type="hidden" class="form-control" id="validationDefault03" name="month_date" value="<?php echo date("F")?>" required>
    </div>
    <div class="form-row">
    <div class="col-lg-6 ">
    </div>

    <div class="col-lg-6 ">
    <br>
    <br>
                
    <br><h6 class="text-center"><b><u> <?php echo$Dentist;?> <?php echo$Dentist_middlename;?> <?php echo$Dentist_lastname;?></u></b></h6>
                <h6 class="text-center" ><b>DENTIST</b></h6>
            
            <input type="hidden" class="form-control" id="validationDefault03" name="leave_recommendation" value="Pending" required>
    </div>
    
    <div class="col-lg-6 col-md-6 mb-6">

            <input type="hidden" class="form-control" id="validationDefault03" name="leave_status" value="Pending" required>
    </div>

    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <div class="row" >
            <div class="col-6">
            <p>DMMMSU-MDS-F003</p>
            <p>Rev No. 00 (07.15.2020)</p>
            </div>
            <div class="col-6 text-right">

                            
                            <?php
                            ob_start();
                            include_once "assets/connection.php";
                            $conn = dbConnect();
                            $ID =$_POST['dd_id'];
                            $account = $conn->prepare("SELECT * FROM dental_examination 
                            WHERE dd_id = :dd_id");
                                
                                $account->execute( ['dd_id' => $ID]);
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){

                                $Status= $result['Status'];
                                $COMPLETED ='
                                
                                <input type="hidden" value="'.$result["dd_id"].'" name="dd_id"/>
                                <button type = "submit" class="btn btn-warning" ><i class="fas fa-print"> Print</i> </button> 
                                ';
                                $ONGOING ="    
                                ";
                                if($Status == ''){
                                    $Status =  $COMPLETED;
                                }else if($Status == '') {
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
   

