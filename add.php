<?php
$con=mysqli_connect('localhost','root','12345','mange');
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];

mysqli_query($con,"insert into employee (name,email,dept) 
values('$name','$email','$dept')");
header("location:index.php");
}


?>

<form method="post">

<table>
<tr>
<td>name</td>
<td><input type="textbox" name="name" ></td>
</tr>

<tr>
<td>email</td>
<td><input type="textbox" name="email"  ></td>
</tr>

<tr>
<td>dept</td>
<td><input type="textbox" name="dept"  ></td>
</tr>

<tr>
<td><input type="submit" name="submit" value='Add data'></td>
</tr>


</table>


</form>
