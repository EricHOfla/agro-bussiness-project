<?php
include('connect.php');
include('nav.php');
?>



<?php


if(isset($_POST['signup'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $username=$_POST['username'];
  $email=$_POST['email'];
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


<div class="col-lg-9" style="box-shadow: 20px 20px 20px rgba(10, 41, 112, 0.1);
  background-color: #F9F5F5; ; width: 60rem; ">
		


        <hr>
<h2>USERS INFORMATIONS</h2>

   <button onclick="document.getElementById('id0').style.display='block'" style="width:auto;">Add</button>

<div id="id0" class="modal">
  <span onclick="document.getElementById('id0').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="" method="POST">
    <div class="container">
      <h3>add new member</h3>
      <p>Please fill in this form to add new member</p>
      <hr>
      <label for="email"><b>First name</b></label><br>
      <input type="text" placeholder="Enter fname" name="fname" required><br>

      <label for="email"><b>Last name</b></label><br>
      <input type="text" placeholder="Enter lname" name="lname" required><br>

      <label for="email"><b>User name</b></label><br>
      <input type="text" placeholder="Enter uname" name="username" required><br>

      <label for="email"><b>User email</b></label><br>

      <input type="text" placeholder="Enter email" name="email" required><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" required><br>

      <label for="psw-repeat"><b>Repeat Password</b></label><br>
      <input type="password" placeholder="Repeat Password" name="psw" required><br>
      
    

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id0').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="signup">ADD</button>
      </div>
    </div>
  </form>
</div>

<table>
  <tr>
    <th>UserId</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Username</th>
    <th>Password</th>
    <th></th>
  </tr>


  <?php
$connection=mysqli_connect("localhost","root","","unilak");
$query="SELECT * FROM users";
$row=mysqli_query($connection,$query);
$execution=mysqli_num_rows($row);
if($execution>0)
{
  $count=1;
while ($record=mysqli_fetch_array($row)) 
{
  echo'<tr>';
       echo'<td>'.$count."</td>";
       echo'<td>'.$record["Firstname"].'</td>';
       echo'<td>'.$record["Lastname"].'</td>';
       echo'<td>'.$record["Username"].'</td>';
       echo'<td>'.$record["Password"].'</td>';
       echo' <td><a  href="edit.php?User_id='.$record["User_id"].'"><i class="btn btn-info">Edit</i></a></td>';
       
       echo' <td><a  href="delete.php?User_id='.$record["User_id"].'"><i class="btn btn-danger">X Delete</i></a></td>';
      
       
    echo'</tr>';
    $count++;
}}
?>
</table>
	</div>

	
</section>
<script>
                  // Get the modal
                  var modal = document.getElementById('id0');
                  
                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
                  </script>



<?php
include('footer.php');?>