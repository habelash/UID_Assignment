<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Slots Booking</title>
<link rel="stylesheet" href="slots.css"> 
</head>
<body>
 

<!-- https://www.w3schools.com/tags/tag_select.asp -->
<?php

include "db_connect.php"; // Using database connection file here

$states = mysqli_query($conn,"select * from state"); // fetch states from database
$district = mysqli_query($conn,"select * from district"); // fetch district from database
$city = mysqli_query($conn,"select * from city"); // fetch city from database
?>
<form class="modal-content animate" action="./display_slots.php" method="post">

<h2>2. Selecting State District and Date (Slots) using list menus</h2>
<p>Please Select the Sate District and Date to Display the slots</p>

<ul>
  <li><a href="index.php">Home</a></li>
  <li>
  <select name="state" id="state">
    <?php
      while($data = mysqli_fetch_array($states)){?>
        <option value="<?php echo $data['state_title']; ?>"><?php echo $data['state_title']; ?></option>
      <?php
    }?>
  </select>
     <br><br>
  </li>
  <li>
     <select name="district" id="district">
     <?php
      while($data = mysqli_fetch_array($district)){?>
        <option value="<?php echo $data['district_title']; ?>"><?php echo $data['district_title']; ?></option>
      <?php
      }?>
     </select>
     <br><br>
  </li>
  <li><input type="date" id="date" name="date"></li>
  <li><button type="submit">Check</button></li>
</ul>

</form>

<?php mysqli_close($db); // Close connection ?>

?>
</body>
</html>