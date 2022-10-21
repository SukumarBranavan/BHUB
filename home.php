<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HA MULTI SPOT</title>
</head>

<body>
<?php include("navi.php");
include_once("actions/connect.php");
include_once("actions/execute.php");
 ?>
<div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">Page Setup</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Sri Lanka</p>

                        <ul class="nav navbar-nav">
                            <li><a href="vision.php" >Vision</a></li>
                            <li><a href="mision.php" class="active">Mision</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="viewSuport.php">Suport US</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Colombo</h3>
                          <h1 style="margin-top: -10px;color: #ddd;">32<sup>o</sup></h1>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="wheather">
                            <div class="stormy rainy animated pulse infinite">
                              <div class="shadow">
                                
                              </div>
                            </div>
                            <div class="sub-wheather">
                              <div class="thunder">
                                
                              </div>
                              <div class="rain">
                                  <div class="droplet droplet1"></div>
                                  <div class="droplet droplet2"></div>
                                  <div class="droplet droplet3"></div>
                                  <div class="droplet droplet4"></div>
                                  <div class="droplet droplet5"></div>
                                  <div class="droplet droplet6"></div>
                                </div>
                            </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
                </div>
                
                
                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-4">
                                <a href="viewSuport.php">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">SUPPORTERS</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                     <!--   <h1> 
										<?php /*?><?php 
						  $num=0;
                          $sql="Select * from suport";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 						
						  $num=$num+1;
						  }
						  echo $num;
						  ?><?php */?></h1>
                                       -->
                                        <hr/>
                                      </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                <a href="viewVolunteer.php">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">VOLUNTEERS</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                      <h1> 
										<?php 
						  $num=0;
                          $sql="Select * from volunteer";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 						
						  $num=$num+1;
						  }
						  echo $num;
						  ?></h1>
                                        <hr/>
                                      </div>
                                    </div>
                                    </a>
                                </div>
                           
                            
                <div class="col-md-4">
                <a href="viewMessage.php">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">MESSAGE</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                      <h1> 
										<?php 
						  $num=0;
                          $sql="Select * from message";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 						
						  $num=$num+1;
						  }
						  echo $num;
						  ?></h1>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            
                 </div>
                 </div>
                 </div>
                 
                 
                 
                 <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-4">
                                <a href="viewProject.php">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">PROJECTS</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                     <h1> 
										<?php 
						  $num=0;
                          $sql="Select * from projects";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 						
						  $num=$num+1;
						  }
						  echo $num;
						  ?></h1>
                                        <hr/>
                                      </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                <a href="viewGalary.php">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">GALARIES</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                       <h1> 
										<?php 
						  $num=0;
                          $sql="Select * from galary";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 						
						  $num=$num+1;
						  }
						  echo $num;
						  ?></h1>
                                        <hr/>
                                      </div>
                                    </div>
                                    </a>
                                </div>
                           
                            
                <div class="col-md-4">
                <a href="viewEmployee.php">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">EMPLOYEES</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1> 
										<?php 
						  $num=0;
                          $sql="Select * from employee";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 						
						  $num=$num+1;
						  }
						  echo $num;
						  ?></h1>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            
                 </div>
                 
                 
                
       </div>
                
</body>
</html>