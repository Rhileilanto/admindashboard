<?php

$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);
$sqlQuery = mysqli_query($conn,"SELECT * FROM contactus");
?>

<!DOCTYPE html>
<html>
<head>
    <?php  require_once('includes/headers.php')?> 
</head>
<body>
	<!-- All our code. write here   -->
	<?php  require_once('includes/navbar.php')?>
	
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 pt-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Contactus</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>created_at</th>
                            </tr>
                        </head> 
						<tbody>
							<tr>
							<?php while($fetch = mysqli_fetch_array($sqlQuery)) { ?>
                                    <tr>
										<td><?php echo $fetch['no']?></td>
                                        <td><?php echo $fetch['firstname']?></td>
                                        <td><?php echo $fetch['lastname']?></td>
                                        <td><?php echo $fetch['phonenumber']?></td>
                                        <td><?php echo $fetch['email']?></td>                                    
                                        <td><?php echo $fetch['message']?></td>                    
                                        <td><?php echo $fetch['created_at']?></td>	
                                        <td>
                                            
                                        <a href="edit-message.php?id=<?php echo $fetch['no']?>" class="btn btn-primary btn-sm">
									        <i class="fa fa-edit"></i>
									    </a>
									    <a href="view-message.php?id=<?php echo $fetch['no']?>" class="btn btn-secondary btn-sm">																	
										    <i class="fa fa-eye"></i>
									    </a>									
									    <a href="delete-message.php?id=<?php echo $fetch['no']?>" class="btn btn-danger btn-sm">
										    <i class="fa fa-trash"></i>
									    </a>  
                                        </td>								
                                    </tr>
                            <?php  }?> 
                        </tbody>              
                     </table>
                    </div>
                    <div class="cardfooter"></div>
				</div>
			</div>
         </div>
    </div>
     <?php require_once('includes/script.php')?>
</body>
</html>
