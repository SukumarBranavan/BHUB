 <?php
 include("navi.php"); 
 include_once("actions/execute.php");
 ?>
 
 <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">


                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">View User</h3>
                        <p class="animated fadeInDown">
                          User <span class="fa-angle-right fa"></span> View User
                        </p>
                    </div>
                  
                
                  </div>
                </div>

                    
            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>
 <b><a href='createUser.php'  class="btn-lg btn-success" > <i class="fa fa-plus" aria-hidden="true">&nbsp;&nbsp;&nbsp;User</i></a></b>
 &nbsp;&nbsp;&nbsp;
<b><a href='createUserRole.php'  class="btn-lg btn-info" > <i class="fa fa-plus" aria-hidden="true">&nbsp;&nbsp;&nbsp;User Role</i></a></b>
 
                    </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NUM</th>
                          <th>IMAGE</th>                       
                          <th>NAME</th>
                           <th>USER ROLE</th>
                            <th>EMAIL</th>                          
                           <th>STATUS</th>
                                              
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
						  $num=0;
                          $sql="Select u.name,u.img,u.email,r.role_name,u.user_id,u.active from user as u inner join user_role as r on u.user_role=r.user_role_id where u.user_role!=1";
                          $result=sqlView($sql,$conn);                         
                          while($row = $result->fetch_assoc()) { 
						  $id2=$row["user_id"]; 
						  $num=$num+1;
						  $img=$row["img"];
						  ?>
                         
                        <tr>
                        <td><?PHP echo $num; ?></td>                       
                          <td><img src='<?php echo "actions/".$row["img"]?>' width="80px" height="80px"></td>
                            <td><p><?php echo ucfirst($row["name"]); ?></p></td> 
                             <td><p><?php echo ucfirst($row["role_name"]); ?></p></td> 
                              <td><p><?php echo $row["email"]; ?></p></td>                                                  
                          <td><?PHP if($row["active"]==1){ ?>
			<b><a href='actions/userActive.php?id=<?php echo $id2; ?> && in=0'  class="btn-lg btn-success" >
           <i class="fa fa-unlock" aria-hidden="true"></i></i></a></b>

						           <?php  }
									 else{
										 ?>
   <b><a href='actions/userActive.php?id=<?php echo $id2; ?> && in=1'  class="btn-lg btn-danger" >
   <i class="fa fa-lock" aria-hidden="true"></i></i></a></b>
										<?php }?>
    <a href="javascript:delete_id(<?php echo  $id2; ?>)"  class="btn-lg btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a>

    <b><a href='createUser.php?id=<?php echo $id2; ?>'  class="btn-lg btn-primary" >
  <i class="fa fa-pencil" aria-hidden="true"></i></a></b>
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
          <!-- end: content -->
          
          <!-- Trigger the modal with a button -->



         
		<script type="text/javascript">
function delete_id(id)
{
	
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='actions/deleteUser.php?id='+id;
     }
}

</script>

