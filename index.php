<?php 

$matches = [
	[
		"homeTeam" => "Squadra 1",
		"guestTeam" => "Squadra 2",
		"homePoints" => "55",
		"guestPoints" => "62"
	],
	[
		"homeTeam" => "Squadra 3",
		"guestTeam" => "Squadra 4",
		"homePoints" => "43",
		"guestPoints" => "60"
	],
	[
		"homeTeam" => "Squadra 5",
		"guestTeam" => "Squadra 6",
		"homePoints" => "72",
		"guestPoints" => "40"
	],
	[
		"homeTeam" => "Squadra 7",
		"guestTeam" => "Squadra 8",
		"homePoints" => "56",
		"guestPoints" => "55"
	]
]; 

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>

	<h2>Snack 1</h2>
	<?php 
	for ($i=0; $i < count($matches); $i++) { 
		$element = $matches[$i];
		echo $element["homeTeam"] ." - " .$element["guestTeam"] ." | " .$element["homePoints"] ."-" .$element["guestPoints"] ."<br>";
	
	};
	?>

	<hr>

	<h2>Snack 2</h2>

	<?php 
	if (strlen($name) >= 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
		echo "Accesso Riuscito";
	} else {
		echo "Accesso Negato";
	};
	?>
	<hr>
	</p>
</body>
</html>


