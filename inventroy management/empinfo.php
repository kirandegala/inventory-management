<!DOCTYPE html>
<html>
<head>
  <title>Employee Info Records</title>
  <link rel="stylesheet" href="stylefortables.css">
</head>
<body>

<h2>Employee Details</h2>

<table class="content-table">
<thead>
  <tr>
    <td><b>Employee Name<b></td>
    <td><b>Employee id<b></td>
    <td><b>Email<b></td>
    <td><b>Password<b></td>
    <td><b>Department<b></td>
  </tr>
</thead>
<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from employeeinfo"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<tbody>
  <tr>
    <td><?php echo $data['ename']; ?></td>
    <td><?php echo $data['empid']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['department']; ?></td>
  </tr>	
</tbody>
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>