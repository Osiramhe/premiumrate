<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// Include database connection file
require"../db-conn.php";
$coin = test_input($_POST["coin"]);
$sql = "SELECT * FROM coins WHERE name = '$coin'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["price"];
    // echo '
    //   <option value="'. $row["name"].'">'. $row["name"].'</option>
    // ';
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["price"]. "<br>";

  }
} else {
  // echo "No coin currently listed for exchange ";
}
$conn->close();

?>