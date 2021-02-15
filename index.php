<?php 
$con=mysqli_connect('localhost','root','12345','mange');
$res=mysqli_query($con, "select * from employee");

?>
<button><a href="add.php">Add Record</a></button>

<table border ='3'>
<tr>
<td>s.no</td>
<td>name</td>
<td>email</td>
<td>dept</td>

</tr>

<?php
$i=1;
while ($row=mysqli_fetch_assoc($res) ){ ?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['dept']?></td>

<td>
<button><a href="edit.php?id=<?php echo $row['id']?>">edit</a>&nbsp;</button>
<button><a href="delete.php?id=<?php echo $row['id']?>">delete</a></button>
</td>

</tr>
    
<?php
$i++;
} ?>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>