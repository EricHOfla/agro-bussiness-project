<?php
include('nav.php');
?>



</table><br><br>

	<table border="1" style="background: #fff">
    <tr>
        <th style="margin-left:  30rem">#</th>
        <th> Name</th>
        <th>Email</th>
        <th>Message</th>
       
        

</tr>


    </tr>

<?php


$sql="SELECT* FROM sms";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
    $count=1;
    while($row=mysqli_fetch_array($result)){
        echo'
        <tr>


        <td>' .$count. '</td>
      
        <td>' .$row["name"]. '</td>
        <td>' .$row["email"]. '</td>
        <td>' .$row["sms"]. '</td>
       
       <td><a class="a" href="edit.php?s_id='.$row["sms_id"].'">Update</a>
       <br><a class="a" href="delete.php?s_id='.$row["sms_id"].'">Delete</a></td>
       
        </tr>';
        $count++;

    }
   
}
?>
</table>
	</div>

	
</section>
<?php
include('footer.php');?>