<?php
require_once('logics/dbconnection.php');
$sqlQuery = mysqli_query($conn,"SELECT * FROM enrollment");

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
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
				</div>
			</div>
            <div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Enrolled on</th>
								<th>Action</th>
                            </tr>
                        </head> 
						<tbody>
							<tr>
							<?php while($fetch = mysqli_fetch_array($sqlQuery)) { ?>
                                    <tr>
										<td><?php echo $fetch['no']?></td>
                                        <td><?php echo $fetch['fullname']?></td>
                                        <td><?php echo $fetch['phonenumber']?></td>
                                        <td><?php echo $fetch['email']?></td>
                                        <td><?php echo $fetch['gender']?></td>
                                        <td><?php echo $fetch['course']?></td>
                                        <td><?php echo $fetch['created_at']?></td>									
										<td>
									    <a href="edit-enrollment.php?id=<?php echo $fetch['no']?>" class="btn btn-primary btn-sm">
									        <i class="fa fa-edit"></i>
									    </a>
									    <a href="view-enrollment.php?id=<?php echo $fetch['no']?>" class="btn btn-secondary btn-sm">																	
										    <i class="fa fa-eye"></i>
									    </a>									
									    <a href="delete-enrollment.php?id=<?php echo $fetch['no']?>" class="btn btn-danger btn-sm">
										    <i class="fa fa-trash"></i>
									    </a>
								        </td>
                                        
                                    </tr>
								
                            </tr>
							<?php  }?>
                        
                    		
                            
                            
                            </tbody>
					</table>
				</div>
              </div>
            </div>
        </div>

    <?php require_once('includes/script.php')?>
</body>
</html>
            
                
                    
