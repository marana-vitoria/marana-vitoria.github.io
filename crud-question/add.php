<html>
<head>
	<title>Add Data</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$pergunta = mysqli_real_escape_string($mysqli, $_POST['pergunta']);
	$altern_a = mysqli_real_escape_string($mysqli, $_POST['altern_a']);
	$altern_b = mysqli_real_escape_string($mysqli, $_POST['altern_b']);
	$altern_c = mysqli_real_escape_string($mysqli, $_POST['altern_c']);
	$altern_d = mysqli_real_escape_string($mysqli, $_POST['altern_d']);
	$altern_e = mysqli_real_escape_string($mysqli, $_POST['altern_e']);
	$resp = mysqli_real_escape_string($mysqli, $_POST['resp']);
		
	// checking empty fields
	if( empty($pergunta) || empty($altern_a) || empty($altern_b) || empty($altern_c) || empty($altern_d) || empty($altern_e) || empty($resp)) {
				
		if(empty($pergunta)) {
			echo "<font color='red'>Pergunta esta vazio.</font><br/>";
		}

		if(empty($altern_a)) {
			echo "<font color='red'>Alternativa A esta vazio.</font><br/>";
		}
		
		if(empty($altern_b)) {
			echo "<font color='red'>Alternativa B esta vazio.</font><br/>";
		}

		if(empty($altern_c)) {
			echo "<font color='red'>Alternativa C esta vazio.</font><br/>";
		}

		if(empty($altern_d)) {
			echo "<font color='red'>Alternativa D esta vazio.</font><br/>";
		}

		if(empty($altern_e)) {
			echo "<font color='red'>Alternativa E esta vazio.</font><br/>";
		}

		if(empty($resp)) {
			echo "<font color='red'>Resposta esta vazio.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO questoes(pergunta,altern_a,altern_b,altern_c,altern_d,altern_e, resp) VALUES('$pergunta','$altern_a','$altern_b','$altern_c', '$altern_d','$altern_e', '$resp')");
		echo $result;
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
