<?php
//database connection
require_once('logics/dbconnection.php');
$sqlFetchStudent = mysqli_query($conn,
    "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
        <div class="card-body">
        <form action="enroll.php" method="POST">
            <div class="row"> 
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                    <label for="fullname" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Enter your full name">
                </div>  
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                    <label for="phoneNumber" class="form-label">Phone Number:</label>
                    <input type="tel" name="phonenumber"  class="form-control" placeholder="+2547.....">
                </div>
            <div class="row">         
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" class="form-control" name="email" placeholder="Please enter your email">
                </div>
                 <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                   <label for="Whats your gender" class="form-label">Whats your gender?</label>
                     <select name="gender" class="form-select" aria-lebel="default select example">
                           <option selected>--select your gender--</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                 </div>
        </div>  
                <p class="padding-top: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis voluptas ab cumque, dolorum quis nulla assumenda debitis libero at, magnam tenetur sequi ex illo id et recusandae autem. Deserunt, natus.</p>
                
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="course" class="form-lebel">What is preferred course ? <Address></Address></label>
                    <select class="form-select" aria-lebel="default select example">
                        <option selected>--select your course--</option>
                        <option value="Standard">Standard</option>
                        <option value="Advanced">Advanced</option>
                        <option value="Diploma">Diploma</option>
                    </select>  
            </div>       
            </div>
              
    </div>
    </div>
    </div>
        </form>
		</body>
</html>
</body>

</html>
