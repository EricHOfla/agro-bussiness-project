
<?php 
  session_start();

include('connect.php');




if (isset($_POST['login'])) {
	

$username=$_POST['username'];
$password=$_POST['password'];


$sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ";
$result=mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0) {

            $rows = mysqli_fetch_array($result);

          
if($rows["account_type"] == "User")
{
	$_SESSION["username"] = $username;
	$_SESSION["account_type"] = "User";
	header("location:admin/");	
	

 }


else if($rows["account_type"] )
{
	$_SESSION["username"] = $username;
	$_SESSION["account_type"] = "Admin";
		header("location:admin/");

	
	 
 }	 
 



}
else{
   echo " <script> alert('Incorrect username or password')</script>";
}

}
  ?> 

<?php


if(isset($_POST['signup'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $gender=
  $password=$_POST['password'];
  $psw=$_POST['psw'];
//   $status='normal';
  $datess=date('D,M,Y');
    
  $sql="INSERT INTO `users`(`User_id`, `Firstname`, `Lastname`, `Username`, `Email`, `Password`, `account_type`)
   VALUES (null, '$fname', '$lname', '$username', '$email','$password','User')";


$res=mysqli_query($conn,$sql);
if ($res) {
  ?>
<script>
  alert("Your registration has been successfull. Thank you!");

</script>

<?php

  }}

?>




<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <title>AGRO Campany Ltd</title>
  </head>
  <body>
    <header role="banner ">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-lg">
          <a class="navbar-brand" href=""><p><span>AG</span>RO</p><small>Campany LTD</small> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#about">About</a>
              </li> 
              <!-- <li class="nav-item">
                <a class="nav-link" href="index.html#">About</a>
              </li>   -->
              <li class="nav-item">
                <a class="nav-link" href="team.php">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#Service">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto gap-1">
              <li class="nav-item ctj-btn">
                <!-- <a class="nav-link" href="login.php">Login</a> -->
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                <div id="id01" class="modal">
  
                    <form class="modal-content animate" action="" method="POST">
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="img_avatar2.png" alt="Avatar" class="avatar">
                      </div>
                  
                      <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required><br>
                  
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required><br>
                          
                        <button type="submit" name="login">Login</button>
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                      </div>
                  
                      <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                      
                                
                          </div>
                      </div>
                    </form>
                  </div>
                  
                  <script>
                  // Get the modal
                  var modal = document.getElementById('id01');
                  
                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
                  </script>

                
              </li>
              <li class="nav-item ctj-btn">
                
                <button onclick="document.getElementById('id0').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id0" class="modal">
  <span onclick="document.getElementById('id0').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account</p>
      <hr>
      <label for="email"><b>First name</b></label><br>
      <input type="text" placeholder="Enter fname" name="fname" required><br>

      <label for="email"><b>Last name</b></label><br>
      <input type="text" placeholder="Enter lname" name="lname" required><br>

      <label for="email"><b>User name</b></label><br>
      <input type="text" placeholder="Enter uname" name="username" required><br>

      <label for="email"><b>User email</b></label><br>
      <label for="gender"><b>Select Gender</b></label><br>
      <select name="gender" id="">
        <option value=""></option>
        <option value="Male">Male</option>
        <option value="Femole" >Femole</option>
      </select><br>
      <input type="radio" name="" id="">
      

      <input type="text" placeholder="Enter email" name="email" required><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" required><br>

      <label for="psw-repeat"><b>Repeat Password</b></label><br>
      <input type="password" placeholder="Repeat Password" name="psw" required><br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id0').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>
                
              </li>
              
              
            </ul> 
          </div>
        </div>
      </nav>
    </header> 

  