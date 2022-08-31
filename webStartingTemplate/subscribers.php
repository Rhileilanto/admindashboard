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
						<span>subscribers</span>
                        <a href="newrecord.php"><button name="subscribe" class="btn btn-primary btn-sm float-right">subscribe</button></a>
					</div>
                    <div class="card-body"></div>
                    <div class="card-footer"></div>
                    <table class="table table-striped table-hover table-responsive" style="font-style: 12px">			          
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Enrolled on</th>
                            </tr>
                        </head> 
						<tbody>
							<tr>
							<?php while($fetch = mysqli_fetch_array($sqlQuery)) { ?>
                                    <tr>
										<td><?php echo $fetch['no']?></td>
                                        <td><?php echo $fetch['email']?></td>
                                        <td><?php echo $fetch['created_at']?></td>									
                                        
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