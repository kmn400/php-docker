<?php

include "conn.php";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql); //다시 응답이 온 것을 봐야 되기 때문에, 값을 받아옴.

  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }

$conn->close();

?>