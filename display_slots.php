<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Slots Status</title>
 <link rel="stylesheet" href="display_slots.css"> 
</head>
<body>
 

<?php

$state=$_POST['state'];
$district=$_POST['district'];
$date=$_POST['date'];

?>

<h3> State:</h3>  <?php echo $state ?> 
<h3> District:  </h3> <?php echo $district ?> 
<h3> Date: </h3> <?php echo $date ?>

<h2>Slots Status</h2>

<table>
  <tr>
    <th>Hospital</th>
    <th>Available Slots</th>
    <th>Booked Slots</th>
    <th>Total Slots</th>
  </tr>
  <tr>
    <td>Bangalore Baptist Hospital</td>
    <td>0</td>
    <td>150</td>
    <td>150</td>
  </tr>
  <tr>
    <td>City hospital,A.M.Road,Frazer Town,Bangalore</td>
    <td>100</td>
    <td>150</td>
    <td>250</td>
  </tr>
  <tr>
    <td>Columbia Asia Hospital Hebbal, Bangalore</td>
    <td>300</td>
    <td>150</td>
    <td>450</td>
  </tr>
  <tr>
    <td>Navachethana Hospital</td>
    <td>150</td>
    <td>150</td>
    <td>300</td>
  </tr>
  <tr>
    <td>Apple Hospital</td>
    <td>22</td>
    <td>138</td>
    <td>150</td>
  </tr>
  <tr>
    <td>ಜೀವನ್ ಆಸ್ಪತ್ರೆ Jeevan Hospital</td>
    <td>250</td>
    <td>250</td>
    <td>500</td>
  </tr>
</table>


</body>
</html>



