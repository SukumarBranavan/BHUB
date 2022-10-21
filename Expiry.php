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
                        <h3 class="animated fadeInLeft">Expiry</h3>
                        <p class="animated fadeInDown">
                          Items <span class="fa-angle-right fa"></span> Expiry Items
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>
            EXPIRY ITEMS

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
                          <th>EXPIRY</th>
                          <th>EXCHANGE</th>                       
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                                      $num=0;
                                      $date3=date("y-m-d");
                          $sql="SELECT b.brand,b.brand_id,i.item_id,i.sel_price,i.name,i.code,i.buy,i.date,i.exp,i.wty from brand as b inner join item as i on i.brand=b.brand_id WHERE i.exp <= '$date3' and i.log=$_id and i.exp!='2000-01-01'";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						              $id2=$row["item_id"]; 						  
						              $item_name=$row["name"];
						              $code=$row["code"];
						              $brand_id=$row["brand_id"];
						              $brand=$row["brand"];                                                 
                          $buy=$row["buy"];                          
                          $date=$row["date"];
                        
                          $exp=$row["exp"];                       
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
                                                      
                              <td><p> <font color="red"><b><?php echo $exp; ?></b>  </font></p></td>
                              
                                                                             
                          <td> 
               <a href="javascript:dofunction('<?php echo $id2; ?>','<?php echo $brand; ?>','<?php echo $item_name; ?>','<?php echo $exp; ?>')" class="btn-sm btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i></a>   
                                              
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
  
    <h3 id="name">ITEM</h3>
  </div>  <!-- Modal content -->
  <div class="modal-body">

   <form class="cmxform" action="actions/expiry.php" method="POST">
    <input type="text" name="idx" id="idx" hidden="">
    <input type="text" name="log" id="log" hidden="" value="<?php echo $_id; ?>">
    
    </div>                   
                                        
       <div class="form-group form-animate-text col-md-12" style="margin-top:20px !important;">
            <input type="date" class="form-text"  name="newexp" >
             <span class="bar"></span>
             <label>Next Expiry Date</label>
       </div>
      
    <input class="submit btn btn-danger" type="submit" value="Submit">
     

   </form>
   

  </div>
</div>
</div>


<script type="text/javascript">


function dofunction(a,b,c,d){
  document.getElementById("idx").value=a;
  document.getElementById("name").innerHTML=b+" - "+c+"("+d+")";
		
 $('#myModal').modal();
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
       $('#myModall').close();
    }
}
			
</script>



         
		
