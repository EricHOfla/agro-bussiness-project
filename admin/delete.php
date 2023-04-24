<?php
include 'connect.php';

$User_id=$_GET['User_id'];
$data="DELETE FROM `users` WHERE `User_id` ='$User_id'";

$res=mysqli_query($conn,$data) 

   or die("delete failed".mysqli_error());


   ?>
<script>
	alert("Delete successful");

</script>
<?php
echo"<meta http-equiv='refresh' content='0;url=user.php'>";



