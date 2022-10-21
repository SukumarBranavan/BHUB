<?php
 include_once("navi.php"); 
 include_once("actions/execute.php");
include_once("actions/connect.php");
 ?>
  
 <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">


                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">View Expence</h3>
                        <p class="animated fadeInDown">
                          Account <span class="fa-angle-right fa"></span> View Expence
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>
 <b><a href="javascript:dofun()"  class="btn-lg btn-success" > <i class="fa fa-plus" aria-hidden="true">&nbsp;&nbsp;&nbsp;Expence</i></a></b>


 
                    </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NUM</th>
                          <th>DISCRIPTION</th>
                          <th>AMOUNT</th>
                          <th>DATE</th>                                                
                          <th>EDIT</th>                      
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
						  $num=0;
                          $sql="Select * from expence";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						  $id2=$row["expence_id"]; 
						  $num=$num+1;
						 $name=$row["name"];
						 $amount=$row["amount"];
						 $date=$row["date"];
						
						  ?>
                         
                        <tr>                        
                        <td><?PHP echo $num; ?></td>                                                                          
                             <td><p><?php echo ucfirst($name); ?></p></td>
                              <td><p><?php echo number_format($amount,2); ?></p></td>
                               <td><p><?php echo $date; ?></p></td> 
                                                                             
                          <td> 
                           <a href="javascript:dofunction('<?php echo $id2; ?>','<?php echo $name; ?>','<?php echo $amount; ?>')" class="btn-sm btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i></a>                                                                    &nbsp;
                  <a href="javascript:delete_id(<?php echo  $id2; ?>)"  class="btn-sm btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a>  
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
    <span class="close">&times;</span>
    <h3>Create Expence</h3>
  </div>  <!-- Modal content -->
  <div class="modal-body">

   <form class="cmxform" action="actions/expence.php" method="POST">
   <input type="text" name="idx" id="idx" hidden="">
 <div class="form-group form-animate-text" style="margin-top:40px !important;">
 <input type="text" class="form-text" id="validate_firstname" name="name" required >
                              <span class="bar"></span>
                              <label>Discription</label>
                            </div>
    <div class="form-group form-animate-text" style="margin-top:40px !important;">
 <input type="number" class="form-text" id="amount" name="amount" required >
                              <span class="bar"></span>
                              <label>Amount</label>
                            </div>
    <input class="submit btn btn-danger" type="submit" value="Submit">
     
   
    </button>
   </form>
   
    </form>
  </div>

</div>
<script type="text/javascript">


function dofunction(id,cat,amo){
	document.getElementById("idx").value=id;
	document.getElementById("validate_firstname").value=cat;
	document.getElementById("amount").value=amo;	
 $('#myModal').modal();
}

function dofun(){
	document.getElementById("idx").value=0;

 $('#myModal').modal();
}
function delete_id(id)
{
	
     if(confirm('Sure To Remove This Expence ?'))
     {
        window.location.href='actions/deleteExpence.php?id='+id;
     }
}
</script>


         
		
