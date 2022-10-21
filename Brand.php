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
 <b><a href="javascript:dofun()"  class="btn-lg btn-success" > <i class="fa fa-plus" aria-hidden="true">&nbsp;&nbsp;&nbsp;Brand</i></a></b>


 
                    </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NUM</th>
                          <th>BRAND NAME</th>                                                
                          <th>EDIT</th>                      
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
						  $num=0;
                          $sql="Select * from brand where log_id='$_id'";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						  $id2=$row["brand_id"]; 
						  $num=$num+1;
						 $cat=$row["brand"];
						
						  ?>
                         
                        <tr>                        
                        <td><?PHP echo $num; ?></td>                                                                          
                             <td><p><?php echo ucfirst($cat); ?></p></td> 
                                                                             
                          <td> 
                           <a href="javascript:dofunction('<?php echo $id2; ?>','<?php echo $cat; ?>')" class="btn-sm btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i></a>                                        </td>                                                  
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
   
    <h3>Create Brand</h3>
  </div>  <!-- Modal content -->
  <div class="modal-body">

   <form class="cmxform" action="actions/brand.php" method="POST">
   <input type="text" name="idx" id="idx" hidden="">
   <input type="text" name="log" id="log" hidden="" value="<?php echo $_id; ?>">
 <div class="form-group form-animate-text" style="margin-top:40px !important;">
 <input type="text" class="form-text" id="validate_firstname" name="name" required >
                              <span class="bar"></span>
                              <label>Brand</label>
                            </div>
    <input class="submit btn btn-danger" type="submit" value="Submit">
     
   
    </button>
   </form>
   
    </form>
  </div>

</div>
<script type="text/javascript">


function dofunction(id,cat){
	document.getElementById("idx").value=id;
	document.getElementById("validate_firstname").value=cat;	
 $('#myModal').modal();
}

function dofun(){
	document.getElementById("idx").value=0;

 $('#myModal').modal();
}
</script>


         
		
