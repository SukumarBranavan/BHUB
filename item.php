<?php
 include("navi.php"); 
 include_once("actions/execute.php");
include_once("actions/connect.php");
$date=date("y-m-d");
 ?>
  
 <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">


                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">View Stock</h3>
                        <p class="animated fadeInDown">
                          Items <span class="fa-angle-right fa"></span> View Items
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>
<b><a href="javascript:dofun()"  class="btn-lg btn-success" > <i class="fa fa-plus" aria-hidden="true">&nbsp;&nbsp;&nbsp;New Item</i></a></b>

                    </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NUM</th>
                          <th>CODE</th>  
                          <th>BRAND</th>                         
                          <th>NAME</th>                                                         
                          <th>BUYING</th> 
                          <th>SEL</th>                                                 
                          <th>WTY</th>                         
                          <th>EXPIRY</th>
                          <th>EDIT</th>                       
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
						              $num=0;
                          $sql="SELECT b.brand,b.brand_id,i.item_id,i.sel_price,i.name,i.code,i.buy,i.date,i.exp,i.wty from brand as b inner join item as i on i.brand=b.brand_id WHERE i.log=$_id";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						              $id2=$row["item_id"]; 						  
						              $item_name=$row["name"];
						              $code=$row["code"];
						              $brand_id=$row["brand_id"];
						              $brand=$row["brand"];                                                 
                          $buy=$row["buy"];                          
                          $date=$row["date"];
                          $sel=$row["sel_price"];
                          $exp=$row["exp"];
                          $wty=$row["wty"];
                          $num=$num+1;
                          
                          $md="";
                          if($exp=="2000-01-01"){
                            $exp="---";
                            $md="";
                          }else if($exp<$date){
                            $md="Expiry";
                          }
                          else{
                            $md="";
                          }
						 
						  ?>
                         
                        <tr>                        
                        <td><?PHP echo $num; ?></td>
                            <td><p><?php echo $code; ?></p></td>                                                                                                   
                             <td><p><?php echo ucfirst($brand); ?></p></td>                             
                              <td><p><?php echo ucfirst($item_name); ?></p></td>                             
                              <td><p><?php echo $buy; ?></p></td>
                              <td><p><?php echo $sel; ?></p></td>                                                         
                              <td><p><?php echo $wty; ?></p></td>                             
                              <td><p><?php echo $exp; ?>  <font color="red"><b><?php echo $md; ?> </b>  </font></p></td>
                              
                                                                             
                          <td> 
               <a href="javascript:dofunction('<?php echo $id2; ?>','<?php echo $code; ?>','<?php echo $brand_id; ?>','<?php echo $item_name; ?>','<?php echo $buy; ?>','<?php echo $sel; ?>','<?php echo $wty; ?>','<?php echo $exp; ?>')" class="btn-sm btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i></a>   
                                              
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
  
    <h3>ITEM</h3>
  </div>  <!-- Modal content -->
  <div class="modal-body">

   <form class="cmxform" action="actions/item.php" method="POST">
    <input type="text" name="idx" id="idx" hidden="">
    <input type="text" name="log" id="log" hidden="" value="<?php echo $_id; ?>">
    
    </div>
       
       <div class="form-group form-animate-text col-md-6" style="margin-top:20px !important;">            
            <select id="brand" name="brand" class="form-text"  STYLE="font-family : monospace;
 font-size : 12pt" >                
             <?php 
			 $sql="SELECT * FROM brand where log_id=$_id";
                 $result=sqlView($sql,$conn);                         
                  while($row = $result->fetch_assoc()) { 
			       $brand_id=$row["brand_id"]; 
				    $brand=$row["brand"]; 
						  ?>
            <option value="<?php echo $brand_id; ?>"><?php echo $brand; ?></option>
           
           <?php }?>
            
            </select>
             <span class="bar"></span>
             <label>Brand</label>
       </div>
       
       <div class="form-group form-animate-text col-md-6" style="margin-top:20px !important;">
            <input type="text" class="form-text" id="name" name="name" required >
             <span class="bar"></span>
             <label>Name</label>
       </div>
       
         <div class="form-group form-animate-text col-md-6" style="margin-top:20px !important;">
            <input type="text" class="form-text" id="code" name="code" required>
             <span class="bar"></span>
             <label>Code</label>
       </div>
             
       <div class="form-group form-animate-text col-md-6" style="margin-top:20px !important;">
            <input type="number" class="form-text" id="buy" name="buy" required >
             <span class="bar"></span>
             <label>Buying Price</label>
       </div>
       <div class="form-group form-animate-text col-md-6" style="margin-top:20px !important;">
            <input type="number" class="form-text" id="sel" name="sel" required >
             <span class="bar"></span>
             <label>Seling Price</label>
       </div>

       <div class="form-group form-animate-text col-md-3" style="margin-top:20px !important;">
            <input type="number" class="form-text" id="wty" name="wty" value="0" >
             <span class="bar"></span>
             <label>Warranty (Months) </label>
       </div>

       <div class="form-group form-animate-text col-md-3" style="margin-top:20px !important;">
            <input type="date" class="form-text" id="exp" name="exp">
             <span class="bar"></span>
             <label>Expiry Date</label>
       </div>
      
    <input class="submit btn btn-danger" type="submit" value="Submit">
     

   </form>
   

  </div>
</div>
</div>


<script type="text/javascript">


function dofunction(a,b,c,d,e,f,g,h){
	document.getElementById("idx").value=a;
	document.getElementById("code").value=b;
	document.getElementById("brand").value=c;
  document.getElementById("name").value=d;
	document.getElementById("buy").value=e; 
  document.getElementById("sel").value=f;
  document.getElementById("wty").value=g; 
  document.getElementById("exp").value=h;
		
 $('#myModal').modal();
}

function dofun(){
	document.getElementById("idx").value=0;
	document.getElementById("code").value=0;
  document.getElementById("name").value="";
	document.getElementById("buy").value=0; 
  document.getElementById("sel").value=0;
  document.getElementById("wty").value=0; 
  document.getElementById("exp").value="";

 $('#myModal').modal();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
       $('#myModall').close();
    }
}
			
</script>



         
		
