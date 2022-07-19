<?php
//database connection
require_once('logics/dbconnection.php');
$sqlFetchStudent = mysqli_query($conn,
    "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchStudentRecords = mysqli_fetch_array($sqlFetchStudent))
{
    $firstname =$fetchStudentRecords['firstname'];
    $lastname =$fetchStudentRecords['lastname'];
    $phonenumber =$fetchStudentRecords['phonenumber'];
    $email =$fetchStudentRecords['email'];
    $message =$fetchStudentRecords['message'];
    $created_at=$fetchStudentRecords['created_at'];
}

?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
   <?php require_once('includes/navbar.php')?>

	<div class="sidebar">
	   <?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-centre">
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">First Name: <span class="float-right badge badge-primary"><?php echo $firstname?></span></li>
                                    <li class="list-group-item">Last Name: <span class="float-right badge badge-danger"><?php echo $lastname?></span></li>  
                                    <li class="list-group-item">Phone Number: <span class="float-right badge badge-secondary"><?php echo $phonenumber?></span></li>
                                                                                                                                              
                                </ul>
                            </div>
                    </div> 
                </div> 
                <div class="col-lg-6">                                                                                   
                    <div class="card">
                        <div class="card-header bg-dark text-white text-centre">
                            <h4 class="card-title">Other Information</h4>
                        </div>           
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Email: <span class="float-right badge badge-danger"><?php echo $email?></span></li>   
                                    <li class="list-group-item">Message: <span class="float-right badge badge-primary"><?php echo $message?></span></li>                                    
                                    <li class="list-group-item">created_at: <span class="float-right badge badge-danger"><?php echo $created_at?></span></li> 
                                </ul>
                            </div>                    
                    </div>
                </div>
            </div>           
        </div>    
    </div>
	  <?php require_once('includes/script.php')?>

</body>
</html>