<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<title>EDIT DATA</title>
</head>
<body>
<center>


<?php
include 'connect.php';
$User_id=$_GET['User_id'];
if(isset($_POST['update'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	

	$sql="UPDATE users SET Firstname='$fname',Lastname='$lname',Username='$uname',Password='$cell' WHERE s_id=$s_id";
	if(mysqli_query($conn,$sql)){
	?>
<script>
	alert("Update succefull");

</script>
<?php
echo"<meta http-equiv='refresh' content='0;url=user.php'>";

}}



$sql="SELECT * FROM users WHERE User_id=$User_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
    while($row=mysqli_fetch_array($result)){

echo '<div style="background: linear-gradient(rgba(22,22,50,0.5),rgba(22,22,50,0.5)),
	url(../photo/op.jfif); height:120vh;
	">
<br> <h2 style="color:white;">  Update DATA </h2>    <br><br>
	<form method="POST" action="" style="color:black">
<i style="color: white" class="fas fa-book"></i>
	<label style="color: white">Shedule Name:			</label><br><input type="text" name="s_name" placeholder="" value="'.$row['s_name'].'"><br><br>
<i style="color: white" class="fas fa-calendar"></i>
	<label style="color: white">Day:			</label><br><input type="text" name="day" placeholder="" value="'.$row['days'].'"><br><br>
<center>
<i style="color: white" class="fas fa-comment"></i>
	<label style="color: white">Type Comment......			</label><br>
<textarea style="width: 43%;" class="form-control" rows="4" name="comment" placeholder="'.$row['comments'].'" value="'.$row['comments'].'"></textarea>
</center><br>
<i style="color: white" class="fa fa-map-marker"></i>
	<label style="color: white">Cell			</label><br><input type="text" name="cell" placeholder="" value="'.$row['cells'].'"><br><br>
<input class="btn btn-success" type="submit" name="update" value="update">
	 </form></div>';
}}

?>

</body>
</html>
