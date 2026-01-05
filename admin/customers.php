<?php
include '../db/connect.php';
$result = mysqli_query($conn,"SELECT * FROM customers");
?>

<h2>Customers</h2>
<table border="1" width="100%">
<tr>
<th>Name</th><th>Phone</th><th>Email</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['phone'] ?></td>
<td><?= $row['email'] ?></td>
</tr>
<?php } ?>
</table>
