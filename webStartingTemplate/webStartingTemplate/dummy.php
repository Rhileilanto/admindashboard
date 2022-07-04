<?php
$server="localhost";
$username="root";
$password="";
$database="web2";

$conn=mysqli_connect($server,$username,$password,$database);

$sqlQuery = mysqli_query($conn,"SELECT * FROM enrollment");
$fetchRecords= mysqli_fetch_array ($sqlQuery);
echo $fetchRecords["fullname"];
echo $fetchRecords["phonenumber"];
echo $fetchRecords["gender"];
while($fetchRecords= mysqli_fetch_array ($sqlQuery)){
    # code... 
    echo $fetchRecords['fullname'];
    echo $fetchRecords['phonenumber'];
    echo $fetchRecords['gender'];
}
?>

