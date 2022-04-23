<html>
<head>
  <title>Manufactured Products Records</title>
  <link rel="stylesheet" href="stylefortables.css">
</head>
<body>

<h2>Manufactured Product Details</h2>

<table class="content-table" >
<thead>
  <tr>
    <td><b>Drug's Tradename<b></td>
    <td><b>Formulae<b> </td>
    <td><b>Price<b></td>
    <td><b>Adding Into Table<b></td>
  </tr>
</thead>
<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from manufacturedproducts"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<tbody>
  <tr>
    <td><?php echo $data["Drug's Tradename"]; ?></td>
    <td><?php echo $data['Formulae']; ?></td>
    <td><?php echo $data['Price']; ?></td>
    <td><a href="addMPtable.html" class="addbtn"><button
    style="
    background-color: #009879;
    border: none;
    font-size: 13px;
    color: white;
    padding: 8px 24px;
    border-radius: 12px;
    margin-left: 22px">
      ADD</button></td>
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
    padding: 10px 26px;
    border-radius: 12px;
    margin-left: 425px">
    Print</button>

<?php mysqli_close($db); // Close connection ?>


</body>
</html>