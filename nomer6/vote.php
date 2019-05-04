<?php 

$conn = mysqli_connect("localhost", "root", "", "quick_count");
$id = $_GET["id"];
$result= mysqli_query($conn, "SELECT earned_vote FROM candidates WHERE id = $id");
$vote = mysqli_fetch_row($result);
$newVote = $vote[0] + 1;
mysqli_query($conn, "UPDATE candidates SET earned_vote = $newVote WHERE id = $id");
header("Location: index.php");