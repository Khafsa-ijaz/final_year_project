
<?php 
$sql = "SELECT * FROM enquiry DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   echo "<h2> $row[id] </>";
  }
} ?>