<?php
$message="";
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);
$queryMessage= mysqli_query($conn,"SELECT * FROM contactus WHERE no='".$_GET['id']."'");

while($fetchMessage =mysqli_fetch_array($queryMessage))
{
    $id=$fetchMessage['no'];
    $firstname=$fetchMessage['firstname'];
    $lastname=$fetchMessage['lastname'];
    $phonenumber=$fetchMessage['phonenumber'];
    $email=$fetchMessage['email'];  
    $message=$fetchMessage['message'];
    $created_at=$fetchMessage['created_at'];
}

//update user records
if(isset($_POST['updateRecords']))
{
    //fetch form data
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    

    //updating records
    $updateQuery=mysqli_query($conn,
    "UPDATE contactus SET firstname='$firstname',lastname='$lastname', phonenumber='$phonenumber',message='$message'
    WHERE no='".$_GET['id']."' ");

    if($updateQuery)
    {
        $message="update successful";
        header('location:contactus.php');
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
                            <h4>Edit Student</h4>
                        </div>
                        <div class="card-body">
                        <form action="edit-message.php" method="post">
                            <div class="row">
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="firstname" class="form-lebel">First Name</label>
                                    <input type="text" name="firstname" class="form-control"placeholder="Enter Your First Name">
                                </div>
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="lastname" class="form-lebel">Last Name</label>
                                    <input type="text" name="lastname"  class="form-control" placeholder="Enter Your Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="PhoneNumber" class="form-lebel">Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Enter Your Phone Number">
                                </div>
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="Email" class="form-lebel">Email</label>
                                    <input type="email" name="email"class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-12">
                                    <label for="message" class="form-label">Your message</label>
                                    <textarea cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submitButton" class="btn btn-primary">Send Message</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
    
	
	<?php require_once('includes/script.php')?>

</body>
</html>