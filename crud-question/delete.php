<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
//$result = mysqli_query($mysqli, "DELETE questions(pergunta,altern_a,altern_b,altern_c,altern_d,altern_e, resp) FROM ('$pergunta','$altern_a','$altern_b','$altern_c', '$altern_d', '$altern_e', '$resp') WHERE id=$id");

$result = mysqli_query($mysqli, "DELETE  FROM `questoes` WHERE `questoes`.`id`=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

