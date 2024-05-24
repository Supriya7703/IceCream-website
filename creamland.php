
<?php 
$insert=false;
if(isset($_post['name'])){
$server = "localhost";
$username ="root";
$password = "";
$database="creamland";

$con = mysqli_connect($server, $username , $password , $database);

if(!con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "success connecting to the the db";
//$sno=$_request['sno'];
$username=$_REQUEST['username'];
$E_mail=$_REQUEST['E-mail'];
$password=$_REQUEST['password'];
$DOB=$_REQUEST['DOB'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$contact no=$_REQUEST['contact no'];
$payment method=$_REQUEST['payment method'];
$pay-id=$_REQUEST['pay-id'];
$pay-amount=$_REQUEST['pay-amount'];
$date=$_REQUEST['date'];
$sql= "INSERT INTO payment VALUES('$username', '$E-mail','$password','$DOB','$gender','$address',
'$city','$contact no','$payment method','$pay-id','$pay-amount', '$date')";
echo $sql;
if($con->query($sql)==true){
	$insert=true;
}
else{
	echo"ERROR: $sql<br> $con->error";
}
$con->close();
}
?>