<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM questoes ORDER BY id DESC"); // using mysqli_query instead

?>

<html>
<head>	
	<title>Homepage</title>
	<meta charset="utf-8">
</head>

<body>
<a href="add.html">Adicionar questões</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Pergunta</td>
		<td>Alternativa A</td>
		<td>Alternativa B</td>
		<td>Alternativa C</td>
		<td>Alternativa D</td>
		<td>Alternativa E</td>
		<td>Resposta</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['pergunta']."</td>";
		echo "<td>".$res['altern_a']."</td>";
		echo "<td>".$res['altern_b']."</td>";
		echo "<td>".$res['altern_c']."</td>";
		echo "<td>".$res['altern_d']."</td>";
		echo "<td>".$res['altern_e']."</td>";
		echo "<td>".$res['resp']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Tem certeza de que quer apagar a questão?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
