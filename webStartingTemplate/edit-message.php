<?php
$message="";
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);
$queryUser= mysqli_query($conn,"SELECT * FROM contactus WHERE no='".$_GET['id']."'");

while($fetchUser =mysqli_fetch_array($queryUser))
{
    $id=$fetchUser['no'];
    $firstname=$fetchUser['firstname'];
    $lastname=$fetchUser['lastname'];
    $phonenumber=$fetchUser['phonenumber'];
    $email=$fetchUser['email'];  
    $message=$fetchUser['message'];
    $created_at=$fetchUser['created_at'];
}

//update user records
if(isset($_POST['updateRecords']))
{
    //fetch form data
    $name=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phonenumber'];
    $emailAddres=$_POST['email'];

    

    //updating records
    $updateQuery=mysqli_query($conn,
    "UPDATE contactus SET firstname='$name',lastname='$name', phonenumber='$phone'
    WHERE no='".$_GET['id']."' ");

    if($updateQuery)
    {
        $message="update successful";
    }
    else
    {
        $message="error";
    }
    
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Student <?php echo $firstname .' '.  $email ?></h4>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
    
	
	<?php require_once('includes/script.php')?>

</body>
</html>