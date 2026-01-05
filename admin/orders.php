<?php
include '../db/connect.php';
$result = mysqli_query($conn,"SELECT * FROM orders");
?>

<h2>Orders</h2>
<table border="1" width="100%">
<tr>
<th>ID</th><th>Total</th><th>Status</th><th>Date</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?= $row['order_id'] ?></td>
<td>RM <?= $row['total'] ?></td>
<td><?= $row['status'] ?></td>
<td><?= $row['order_date'] ?></td>
</tr>
<?php } ?>
</table>
