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
                        <h3 class="animated fadeInLeft">View  Customer</h3>
                        <p class="animated fadeInDown">
                          Customer <span class="fa-angle-right fa"></span> View Customer
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>
 <b><a href="javascript:dofun()"  class="btn-lg btn-success" > <i class="fa fa-plus" aria-hidden="true">&nbsp;&nbsp;&nbsp;Customer</i></a></b>


 
                    </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NUM</th>
                          <th>NAME</th>  
                          <th>CONTACT NUM</th>
                          <th>ADDRESS</th>                                    
                          <th>OUTSTANDING</th>                                                                                                        
                           <th>JOIN DATE</th>   
                           <th>EDIT</th>  
                           <th>CREDIT</th> 
                           <th>COLECT</th>                    
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
						  $num=0;
						  $total=0;
                          $sql="Select * from customer where log_id='$_id'";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						  $id2=$row["customer_id"]; 
						  $num=$num+1;
						 $name=$row["name"];
						 $tp=$row["tp"];
						 $add=$row["address"];
						$date=$row["date"];
            
              $out=$row["outstanding"];
			  $total=$total+$out;
						  ?>
                         
                        <tr>                        
                        <td><?PHP echo $num; ?></td>                                                                          
                             <td><p><?php echo ucfirst($name); ?></p></td> 
                              <td><p><?php echo $tp; ?></p></td> 
                               <td><p><?php echo ucfirst($add); ?></p></td>
                                <td><p><?php echo number_format($out,2); ?></p></td>
                               
                                 <td><p><?php echo $date; ?></p></td> 
                                                                             
                          <td> 
       <a href="javascript:dofunction('<?php echo $id2; ?>','<?php echo $name; ?>','<?php echo $tp; ?>','<?php echo $add; ?>')" class="btn-sm btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i></a>   
       </td>                            
       <td>
       <a href="javascript:newCredit('<?php echo $id2; ?>','<?php echo $out; ?>')" class="btn btn-sm btn-success"> <i class="fa fa-credit-card" aria-hidden="true"></i></a> 
         
       </td>

       <td>       
       <?php if($out>0){
         ?>
<a href="javascript:payCredit('<?php echo $id2; ?>','<?php echo $out; ?>')" class="btn btn-sm btn-danger"> <i class="fa fa-money" aria-hidden="true"></i></a> 
         <?php
       }
       else{
         ?>
         --
         <?php
       } 
       ?>
        
       </td>                      
                        </tr>
                      <?php  }?>

                      </tbody>
					
                        </table>
						  <h3 align="center"><b><?php echo "Total balance = ".number_format($total,2); ?></b></h3>
                      </div>
                  </div>
                </div>
              </div>  
                 
                </div>
              </div>                 
      		  </div>
          <!-- end: content --
            <a href="javascript:delete_id(<?php //echo  $id2; ?>)"  class="btn-lg btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a>
          <!-- Trigger the modal with a button -->



<!-- Trigger/Open The Modal -->
<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">
 
  <div class="modal-content">
  
  <div class="modal-header">
  
    <h3>Create Customer</h3>
  </div>  <!-- Modal content -->
  <div class="modal-body">

   <form class="cmxform" action="actions/customer.php" method="POST">
   <input type="text" name="idx" id="idx" hidden="">
   <input type="text" name="log" id="log" hidden="" value="<?php echo $_id ?>">
   
 <div class="form-group form-animate-text" style="margin-top:40px !important;">
 <input type="text" class="form-text" id="validate_firstname" name="name" required >
                              <span class="bar"></span>
                              <label>Name</label>
                            </div>
                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
 <input type="text" class="form-text" name="tp" id="tp">
                              <span class="bar"></span>
                              <label>Contact Num</label>
                            </div>
                            
  <div class="form-group form-animate-text" style="margin-top:40px !important;">
 <input type="text" class="form-text"  name="address" id="add" required>
                              <span class="bar"></span>
                              <label>Address</label>
                            </div>
                            
                        
                            
    <input class="submit btn btn-danger" type="submit" value="Submit">
     
   
   
   
    </form>
  </div>

</div>
</div>



<!-- The Modal -->
<div id="myModal2" class="modal">
 
  <div class="modal-content">
  
  <div class="modal-header">
   
    <h3>Pay Credit</h3>
  </div>  <!-- Modal content -->
  <div class="modal-body">

   <form class="cmxform" action="actions/payCredit.php" method="POST">  
   <input type="text" name="ids" id="ids" hidden=""> 
   <input type="text" name="log" id="log" hidden="" value="<?php echo $_id ?>">
         <input type="text" name="out" id="out" hidden="">  
         <div class="form-group form-animate-text" style="margin-top:40px !important;">       
            <input type="text" class="form-text"  name="outstand" id="outstand"disabled>
             <span class="bar"></span>
             
       </div>
       <div class="form-group form-animate-text" style="margin-top:40px !important;">       
    <input type="number" class="form-text"  name="amount" id="amount"  required>
             <span class="bar"></span>
             <label>AMOUNT</label>
       </div>
      
       <div class="form-group form-animate-text" style="margin-top:40px !important;">
            <input type="text" class="form-text" id="dis" name="dis" required>
             <span class="bar"></span>
             <label>DISCRIPTIONS</label>
       </div>
         <h1 align="right"> 
    <input class="submit btn btn-lg btn-success" type="submit" value="Pay">         
   </h1>
    </form>
  </div>

</div>
</div>








<!-- The Modal -->
<div id="myModal23" class="modal">
 
  <div class="modal-content">
  
  <div class="modal-header">
   
    <h3>New Credit</h3>
  </div>  <!-- Modal content -->
  <div class="modal-body">

   <form class="cmxform" action="actions/newCredit.php" method="POST">  
   <input type="text" name="idc" id="idc" hidden=""> 
   <input type="text" name="log" id="log" hidden="" value="<?php echo $_id ?>">        
   <input type="text" name="out" id="out2" hidden=""> 
       <div class="form-group form-animate-text" style="margin-top:40px !important;">       
            <input type="number" class="form-text"  name="amount" id="amount" onfocusout=" checkAlert()" required>
             <span class="bar"></span>
             <label>AMOUNT</label>
       </div>
      
       <div class="form-group form-animate-text" style="margin-top:40px !important;">
            <input type="text" class="form-text" id="invoice" name="invoice" required>
             <span class="bar"></span>
             <label>INVOICE NUM</label>
       </div>
         <h1 align="right"> 
    <input class="submit btn btn-lg btn-success" type="submit" value="NEW CREDIT">         
   </h1>
    </form>
  </div>

</div>
</div>








<script type="text/javascript">
window.onclick = function(event) {
    if (event.target == modal) {
       $('#myModal2').close();
    }
}

window.onclick = function(event) {
    if (event.target == modal) {
       $('#myModal23').close();
    }
}

function dofunction(id,name,tp,add){
	document.getElementById("idx").value=id;
	document.getElementById("validate_firstname").value=name;	
	document.getElementById("tp").value=tp;	
	document.getElementById("add").value=add;	
 
 $('#myModal').modal();
}

function dofun(){
	document.getElementById("idx").value=0;

 $('#myModal').modal();
}
function payCredit(a,b){
	document.getElementById("ids").value=a;
  document.getElementById("out").value=b;
  document.getElementById("outstand").value="Total Outstanding "+b;

 $('#myModal2').modal();
}

function newCredit(a,b){
	document.getElementById("idc").value=a;
  document.getElementById("out2").value=b;
 $('#myModal23').modal();
}


function checkAlert(){
 var x= parseFloat(document.getElementById("out").value);
 var z= parseFloat(document.getElementById("amount").value);
 if(z>x){
   alert("Check your Amount");
   document.getElementById("amount").value=null;
   document.getElementById("amount").focus();
   
 }
}
</script>


         
		
