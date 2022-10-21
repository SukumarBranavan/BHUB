<?php
 include("navi.php"); 
 include_once("actions/execute.php");
include_once("actions/connect.php");
 ?>
  
 <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">


                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">View Brand</h3>
                        <p class="animated fadeInDown">
                          Product <span class="fa-angle-right fa"></span> View Brand
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>
 <b>
     <a href="javascript:dofun()"  class="btn-lg btn-success" > 
        <i class="fa fa-plus" aria-hidden="true">
          &nbsp;&nbsp;&nbsp;User
         </i>
    </a>
 </b>


 
                    </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NUM</th>
                          <th>NAME</th>
                          <th>TP</th> 
                          <th>EMAIL</th> 
                          <th>DATE</th>                                              
                          <th>BLOCK</th>                      
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
						  $num=0;
                          $sql="Select * from user";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
                            $id2=$row["user_id"]; 						
                            $name=$row["name"]; 
                            $tp=$row["tp"];            
                            $date=$row["date"];
                            $email=$row["email"];                          
                         $num=$num+1;
						
						  ?>
                         
                        <tr>                        
                        <td><?PHP echo $num; ?></td>                                                                          
                             <td><p><?php echo ucfirst($name); ?></p></td> 
                             <td><p><?php echo $tp; ?></p></td> 
                             <td><p><?php echo $email; ?></p></td> 
                             <td><p><?php echo $date; ?></p></td> 
                                                                             
                          

                            <td><?PHP if($row["active"]==1){ ?>
			<b><a href='actions/userActive.php?id=<?php echo $id2; ?> && in=0'  class="btn-sm btn-success" >
           <i class="fa fa-unlock" aria-hidden="true"></i></i></a></b>

						           <?php  }
									 else{
										 ?>
   <b><a href='actions/userActive.php?id=<?php echo $id2; ?> && in=1'  class="btn-sm btn-danger" >
   <i class="fa fa-lock" aria-hidden="true"></i></i></a></b>
										<?php }?>
   

  
                                        </td>  

                                                                            
                        </tr>
                      <?php  }?>

                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
                 
                </div>
              </div>                 
      		  </div>
       

<!-- The Modal -->
<div id="myModal" class="modal">
 
  <div class="modal-content">
  
  <div class="modal-header">
   
    <h3>Create User</h3>
  </div>  <!-- Modal content -->
  <div class="modal-body">

   <form class="cmxform" action="actions/saveUser.php" method="POST">  

        <div class="form-group form-animate-text" style="margin-top:40px !important;">
            <input type="text" class="form-text"  name="name" required >
             <span class="bar"></span>
            <label>NAME</label>
        </div>

        <div class="form-group form-animate-text" style="margin-top:40px !important;">
            <input type="tel" class="form-text" name="tp" required >
             <span class="bar"></span>
            <label>TP</label>
        </div>

        <div class="form-group form-animate-text" style="margin-top:40px !important;">
            <input type="email" class="form-text" name="email" required >
             <span class="bar"></span>
            <label>EMAIL</label>
        </div>

        <div class="form-group form-animate-text" style="margin-top:40px !important;">
            <input type="password" class="form-text" name="password" required >
             <span class="bar"></span>
            <label>PASSWORD</label>
        </div>


    <input class="submit btn btn-danger" type="submit" value="Submit">
     
   
    </button>
   </form>
     
  </div>

</div>
</div>
<script type="text/javascript">


function dofun(){	
 $('#myModal').modal();
}
</script>


         
		
