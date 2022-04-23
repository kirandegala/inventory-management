<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Inventory Details</h2>

<table border="2">
  <tr>
    <td><b>Drugname<b></td>
    <td><b>Sold Stock<b></td>
    <td><b>Available Stock<b></td>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from inventory"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['drugname']; ?></td>
    <td><?php echo $data['soldstock']; ?></td>
    <td><?php echo $data['availablestock']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>


<br><br>


<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td><b>Employee Name<b></td>
    <td><b>Employee id<b></td>
    <td><b>Email<b></td>
    <td><b>Password<b></td>
    <td><b>Department<b></td>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from employeeinfo"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['ename']; ?></td>
    <td><?php echo $data['empid']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['department']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>

<br><br>

<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Transportation Details</h2>

<table border="2">
  <tr>
    <td><b>Tracking id<b></td>
    <td><b>Estimated Delivery<b></td>
    <td><b>Drugname<b></td>
    <td><b>Quantity<b></td>
    <td><b>Mode of Transportation<b></td>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from trackinginfo"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['trackingid']; ?></td>
    <td><?php echo $data['estimateddelivery']; ?></td>
    <td><?php echo $data['drugname']; ?></td>
    <td><?php echo $data['quantity']; ?></td>
    <td><?php echo $data['modeoftransportation']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>

<br><br>


<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Manufatured Product Details</h2>

<table border="2">
  <tr>
    <td><b>Drug's Tradename<b></td>
    <td><b>Formulae<b> </td>
    <td><b>Price<b></td>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from manufacturedproducts"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data["Drug's Tradename"]; ?></td>
    <td><?php echo $data['Formulae']; ?></td>
    <td><?php echo $data['Price']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>

<br><br>


<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Buyer's details</h2>

<table border="2">
  <tr>
    <td><b>Name of the Store<b></td>
    <td><b>Location<b></td>
    <td><b>Contact Details<b></td>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from retailstores"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data["name"]; ?></td>
    <td><?php echo $data['location']; ?></td>
    <td><?php echo $data['contactno']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>

