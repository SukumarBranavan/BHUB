 <?php
 include("navi.php");
  //include_once("actions/session.php");
 $user="";
 $pa="";
 if(isset($_GET["id"])){
	$idq=$_GET["id"];
	if($idq==1){
		$user="Sorry,Username not available.";
         $pa="";
	}else if($idq==2){
		$user="";
        $pa="Invalide Old Password.";
	}
	else{
		$user="";
         $pa="";
	}
 }
 ?>
 
 <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">


                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Account</h3>
                        <p class="animated fadeInDown">
                          Reset <span class="fa-angle-right fa"></span> change Login
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
           <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Reset Account</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <form class="cmxform" id="signupForm" method="POST" action="actions/resetSave.php">
                          <div class="col-md-11">
                           
                         <input type="text" name="id" value="<?php echo $_id; ?>" hidden="">
                         <input type="text" name="old_pwd" value="<?php echo $_password; ?>" hidden="">
                          

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
  <input type="email" class="form-text"  id="validate_email" name="validate_username" value="<?php echo $_email; ?>" required>
                              <span class="bar"></span>
                              <label>Email</label>
                               <span><font color="#FF0000"><?php echo $user;?></font></span>
                            </div>
                            
                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                     <input type="password" class="form-text" id="pwd" name="pwd" required>
                              <span class="bar"></span>
                              <label>Old Password</label>
                               <span><font color="#FF0000"><?php echo $pa;?></font></span>
                            </div>
                      
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                     <input type="password" class="form-text" id="validate_password" name="validate_password" required>
                              <span class="bar"></span>
                              <label>Password</label>
                            </div>

                     <div class="form-group form-animate-text" style="margin-top:40px !important;">
      <input type="password" class="form-text" id="validate_confirm_password" name="validate_confirm_password" required>
                              <span class="bar"></span>
                              <label>Confirm Password</label>
                            </div>

                           
                          </div>                   
                          <div class="col-md-12">                             
                              <input class="submit btn btn-danger" type="submit" value="Submit">
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>


                                


                               

                           

                  
                       
                   
                        
                 
      		  </div>
          <!-- end: content -->