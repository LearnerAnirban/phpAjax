<?php
$conn = mysqli_connect("localhost","root", "", "ajax") or die("Database connect Failed!");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query Failed");
$output = "";
if(mysqli_num_rows($result) > 0) {
  echo '<table><tr>
  <th>Students Name</th></th>
  <th>Students Roll</th> 
  <th>Students Class</th>
</tr>';
  while($row = mysqli_fetch_assoc($result)) {

    echo "<tr><td>". $row['name'] . "</td> <td>" . $row['roll'] . "</td> <td>" . $row['class'] . "</td></tr>";
    echo "</table>";

  }
} else {
  echo "Data not found";
}
mysqli_close($conn);
?>
