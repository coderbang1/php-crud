<?php
$con=mysqli_connect('localhost','root','12345','mange');
$id=$_GET['id'];
if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $dept= $_POST['dept'];
    mysqli_query($con,"update employee set name='$name',email='$email', dept='$dept' where  id='$id'");
    header("location:index.php");
}
$res=mysqli_query($con,"select * from employee where id='$id'");
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$email=$row['email'];
$dept=$row['dept'];
?>


<form method="post">

<table>
<tr>
<td>name</td>
<td><input type="textbox" name="name" value=<?php echo $name?>></td>
</tr>

<tr>
<td>email</td>
<td><input type="textbox" name="email" value=<?php echo $email?> ></td>
</tr>

<tr>
<td>dept</td>
<td><input type="textbox" name="dept" value=<?php echo $dept?> ></td>
</tr>

<tr>
<td><input type="submit" name="submit" value='push'></td>
</tr>


</table>


</form>











</form>