<?php
//INSERT INTO `voters` (`voterID`, `voterFirstName`, 
// `voterSurName`, `voterPassword`, `votingLocation`, `voterEmail`)
// VALUES ('8485940', 'John', 'Doel', 'johndoel123', 'Kitengela', 'johndoel@gmail.com');
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>