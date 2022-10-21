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
                        <h3 class="animated fadeInLeft">View Cusomer Credits </h3>
                        <p class="animated fadeInDown">
                          Customer <span class="fa-angle-right fa"></span> Credits
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>
                     Customer Credits
                    </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NUM</th>
                          <th>NAME</th>
                          <th>TP</th>
                          <th>AMOUNT</th>
                          <th>INVOICE NO</th>
                          <th>DATE</th>                      
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
						  $num=0;
                          $sql="Select c.name,c.tp,cr.amount,cr.date,cr.bill_no from customer as c inner join newcredit as cr on cr.customer_id=c.customer_id where c.log_id='$_id'";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						 // $id2=$row["bank_id"]; 						 
						  $name=$row["name"];
						  $amount=$row["amount"];
						  $tp=$row["tp"];
              $date=$row["date"];
              $dis=$row["bill_no"];						  
						 $num=$num+1;
						  ?>
                         
                        <tr>                        
                        <td><?PHP echo $num; ?></td>                                                                          
                             <td><p><?php echo ucfirst($name); ?></p></td> 
                              <td><p><?php echo $tp; ?></p></td> 
                               <td><p><?php echo number_format($amount,2); ?></p></td> 
                                <td><p><?php echo $dis; ?></p></td> 
                                <td><p><?php echo $date; ?></p></td> 
                                                                             
                                                                    
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
       



         
		
