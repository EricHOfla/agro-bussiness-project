
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
    <style>

</style>
<body>

    <header role="banner ">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-lg">
          <a class="navbar-brand" href="#"><p><span>AG</span>RO</p><small>Campany LTD</small> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li> 
              <!-- <li class="nav-item">
                <a class="nav-link" href="index.html#">About</a>
              </li>   -->
              <li class="nav-item">
                <a class="nav-link" href="#">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto gap-3">
              <li class="nav-item ctj-btn">
                <a class="nav-link" href="login.php">Login</a>
                
              </li>
              
            </ul> 
          </div>
        </div>
      </nav>
    </header> 
<br><br><br><br><br><br><br><br><br><br>
  <?php
$connection=mysqli_connect("localhost","root","","unilak");
if(isset($_POST['send']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $select="SELECT * FROM users WHERE username='$username' AND password='$password'";
  $query=mysqli_query($connection,$select);
  if(mysqli_num_rows($query))
  {
    header('location: users.php');
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
  
  }
  else
  {
    echo "<p style='color:red; text-align:center; margin-left:-10rem;'>username or password is incorrect</p>";
  }
}

?>

<center>

<div class="container">
  <form action="" method="POST">
    <label for="fname">Username</label>
    <input type="text"  name="username" placeholder="Your username..">
    <br>
    <label for="lname">Password</label>
    <input type="password" name="password" value="" id="myInput" placeholder="Enter your password"><br>
    <input type="checkbox" style="margin-left: 14rem; width: 15px;" onclick="myFunction()">Show Password
    


    <input type="submit" name="send" value="Submit">
  </form>
</div><br><br><br><br><br><br><br><br><br>

<div class="footer">
  <p>Help&nbsp;|&nbsp;Privacy |&nbsp; Earth doesn't Revolve around our money |&nbsp;&#169; Copy Rights All Reserved</p>
  Developer Ofla
</div>
</center>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>


