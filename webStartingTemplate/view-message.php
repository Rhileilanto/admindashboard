<?php
//database connection


$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);




$sqlFetchStudent = mysqli_query($conn,
    "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchStudentRecords = mysqli_fetch_array($sqlFetchStudent))
{
    $fullname =$fetchStudentRecords['fullname'];
    $phonenumber =$fetchStudentRecords['phonenumber'];
    $email =$fetchStudentRecords['email'];
    $gender =$fetchStudentRecords['gender'];
    $course =$fetchStudentRecords['course'];
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
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Full Name: <span class="float-right badge badge-primary"><?php echo $fullname ?></span></li>
                                    <li class="list-group-item">Phone Number: <span class="float-right badge badge-secondary"></span></li>
                                    <li class="list-group-item">Email: <span class="float-right badge badge-danger"></span></li>                                                                                                             
                                </ul>
                            </div>
                    </div> 
                </div> 
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Gender: <span class="float-right badge badge-primary"></span></li>
                                    <li class="list-group-item">Course: <span class="float-right badge badge-secondary"></span></li>                                    
                                    <li class="list-group-item">created_at: <span class="float-right badge badge-danger"></span></li> 
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