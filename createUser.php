<?php
 include("navi.php");
  include_once("actions/execute.php");

$id2=0;
$img="";
$name="";
$user_role=0;
$email="";
$password="";
$btn="Save";
 if(isset($_GET["id"])){
	 $idz=$_GET["id"];	   						 
            $sql="Select * from user where user_id='$idz'";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						  $id2=$row["user_id"]; 						
              $name=$row["name"]; 
              $tp=$row["tp"];            
						  $date=$row["date"];
              $email=$row["email"];
              $password=$row["password"];
						  $btn="Update";
						  }
 }
 ?>
 
 
 <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">


                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Create User</h3>
                        <p class="animated fadeInDown">
                          User <span class="fa-angle-right fa"></span> Create User
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
           <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4> <b><a href='viewUser.php'  class="btn-lg btn-success" > <i class="fa fa-eye" aria-hidden="true">&nbsp; User </i></a></b>&nbsp;&nbsp;&nbsp; Create New User</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
          <form class="cmxform" id="signupForm" method="POST" action="actions/saveUser.php" enctype="multipart/form-data">


                            <input type="text" name="id" value="<?php echo $id2 ?>" hidden="">
                          <div class="col-md-11">
                          <?php if($id2!=0){ ?>
                          <img src="<?php echo "actions/".$img; ?>" width="150" height="180"><br>
                          <?php }
						  ?>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="file" name="fileToUploadFront" id="fileToUpload" class="form-text">
                              <span class="bar"></span>
                              <label>Choose File</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                             <input type="text" class="form-text" id="validate_firstname" name="name" required value="<?php echo $name; ?>">
                              <span class="bar"></span>
                              <label>Name</label>
                            </div>

                         <div class="form-group form-animate-text" style="margin-top:40px !important;">
                         <select class="form-text" name="user_role">
                         <?php 
						  $sql="SELECT * FROM user_role where user_role_id!=1";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						  $role_id=$row["user_role_id"]; 
						  $role=$row["role_name"]; 
						  if($user_role == $role_id){
						 ?>
                         <option value="<?php echo $role_id; ?>" selected > <?php echo $role; ?> </option>
                       
                         <?php } else 
						 {?>
                           <option value="<?php echo $role_id; ?>"><?php echo $role; ?> </option>
                         <?php 
						     }
						 
						 } 
						 ?>
                         </select>
      
                              <span class="bar"></span>
                              <label>User Role</label>
                            </div>

                            
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
            <input type="email" class="form-text" id="validate_email" name="email" required value="<?php echo $email; ?>">
                              <span class="bar"></span>
                              <label>Email</label>
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
                              <input class="submit btn btn-danger" type="submit" value="Submit" value="<?php echo $btn; ?>">
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>


                                


                               

                           

                  
                       
                   
                        
                 
      		  </div>
          <!-- end: content -->