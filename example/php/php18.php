<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, PHP och HTML-formulär</title>
</head>

<body>

	<p>Forms by POST:
	<form action="?" method=post>
		<fieldset>
			<legend>legend</legend>
			<label>text: <input type=text name=aText></label>
			<label>password: <input type=password name=aPassword></label>
			<label>select: 
				<select name=aSelect>
					<option>ett</option>
					<option>två</option>
					<option>tre</option>
				</select>
			</label>
			<input type=submit name=doSubmit>
		</fieldset>
	</form>

	<p>Forms by GET:
	<form method=get>
		<fieldset>
			<legend>legend</legend>
			<label>text: <input type=text name=aText></label>
			<label>password: <input type=password name=aPassword></label>
			<label>select: 
				<select name=aSelect>
					<option>ett</option>
					<option>två</option>
					<option>tre</option>
				</select>
			</label>
			<input type=submit name=doSubmit>
		</fieldset>
	</form>

<?php 

error_reporting(-1); 

echo '<p>The content of $_POST follows:';
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo '<p>The content of $_GET follows:';
echo "<pre>";
print_r($_GET);
echo "</pre>";

?>


	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

