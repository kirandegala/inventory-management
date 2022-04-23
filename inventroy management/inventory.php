<!DOCTYPE html>
<html>
<head>
  <title>Inventory Records</title>
  <link rel="stylesheet" href="stylefortables.css">
</head>
<body>

<h2>Inventory Details</h2>

<table class="content-table">
<thead>
  <tr>
    <td><b>Drugname<b></td>
    <td><b>Sold Stock<b></td>
    <td><b>Available Stock<b></td>
    <td><b>Adding Into Table<b></td>
    <td><b>Modifying The Table<b></td>
  </tr>
</thead>
<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from inventory"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<tbody>
  <tr>
    <td><?php echo $data['drugname']; ?></td>
    <td><?php echo $data['soldstock']; ?></td>
    <td><?php echo $data['availablestock']; ?></td>
    <td><a href="addINVENTORYtable.html" class="addbtn"><button
    style="
    background-color: #009879;
    border: none;
    font-size: 13px;
    color: white;
    padding: 8px 24px;
    border-radius: 12px;
    margin-left: 22px">
      ADD</button></td>
    <td><a href="modifyINVENTORYinfo.html" class="addbtn"><button
    style="
    background-color: #009879;
    border: none;
    font-size: 13px;
    color: white;
    padding: 8px 24px;
    border-radius: 12px;
    margin-left: 22px">
      MODIFY</button></td>
  </tr>	
</tbody>
<?php
}
?>
</table>

<button onclick="window.print()" 
    style="
    background-color: #009879;
    border: none;
    font-size: 19px;
    color: white;
    padding: 12px 28px;
    border-radius: 12px;
    margin-left: 345px">
    Print</button>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
