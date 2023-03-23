<?php
require_once("db_connect.php");

$query = "SELECT name, score FROM players ORDER BY score DESC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
	$position = 1;
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>" . $position . "</td><td>" . $row["name"] . "</td><td>" . $row["score"] . "</td></tr>";
		$position
