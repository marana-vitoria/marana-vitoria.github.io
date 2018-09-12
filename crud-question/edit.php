
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
			echo "<font color='red'>Pergunta field is empty.</font><br/>";
		}

		if(empty($altern_a)) {
			echo "<font color='red'>Altern a field is empty.</font><br/>";
		}

		if(empty($altern_b)) {
			echo "<font color='red'>Altern b field is empty.</font><br/>";
		}

		if(empty($altern_c)) {
			echo "<font color='red'>Altern c field is empty.</font><br/>";
		}

		if(empty($altern_d)) {
			echo "<font color='red'>Altern d field is empty.</font><br/>";
		}

		if(empty($altern_e)) {
			echo "<font color='red'>Altern e field is empty.</font><br/>";
		}

		if(empty($resp)) {
			echo "<font color='red'>Resp field is empty.</font><br/>";
		}
				
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE questoes SET pergunta='$pergunta', altern_a='$altern_a', altern_b='$altern_b', altern_c='$altern_c', altern_d='$altern_d', altern_e='$altern_e', resp='$resp' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM questoes WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
   //print_r($res);
   // echo "Aqui <p></p><br>";
	$pergunta = $res['pergunta'];
	$altern_a = $res['altern_a'];
	$altern_b = $res['altern_b'];
	$altern_c = $res['altern_c'];
	$altern_d = $res['altern_d'];
	$altern_e = $res['altern_e'];
	$resp = $res['resp'];
	
}
?>
<html>
<head>	
	<title>Edição </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1"  accept-charset="utf-8"  method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Pergunta</td>
				<td><input type="text" name="pergunta" value="<?php echo $pergunta;?>"></td>
			</tr>
			<tr> 
				<td>Alternativa A</td>
				<td><input type="text" name="altern_a" value="<?php echo $altern_a;?>"></td>
			</tr>
			<tr> 
				<td>Alternativa B</td>
				<td><input type="text" name="altern_b" value="<?php echo $altern_b;?>"></td>
			</tr>
			<tr> 
				<td>Alternativa C</td>
				<td><input type="text" name="altern_c" value="<?php echo $altern_c;?>"></td>
			</tr>
			<tr> 
				<td>Alternativa D</td>
				<td><input type="text" name="altern_d" value="<?php echo $altern_d;?>"></td>
			</tr>
				<tr> 
				<td>Alternativa E</td>
				<td><input type="text" name="altern_e" value="<?php echo $altern_e;?>"></td>
			</tr>
			<tr> 
				<td>Resposta</td>
				<td><input type="text" name="resp" value="<?php echo $resp;?>"></td>
			</tr>



			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
