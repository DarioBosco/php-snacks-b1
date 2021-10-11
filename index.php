<?php 

/* 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

## Snack 2
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name
sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

## Snack 4
Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

//Snack 1
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

//Snack 2
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

//Snack 3
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
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

	<h2>Snack 3</h2>
	<ul>
		<?php 
		foreach ($posts as $key => $value) {
			echo 
			'<li>' 
				. $key 
				.'<ul>'; 
					foreach ($value as $post) {
						echo '<li>'
						.'Titolo: '  .$post["title"] .'<br>'
						.'Autore: '  .$post["author"] .'<br>'
						.'Testo: '  .$post["text"] .'<br>'
						.'<hr>';
					}
					echo '</li>' 
				.'</ul>' 
			.'</li>' ;
		};
		
		?>
	</ul>
	<hr>

	<h2>Snack 4</h2>
	<?php 
	/* 
	Metodo alternativo

	$amount = 15;
	$numbers = range(1, 100);
	shuffle($numbers);
	array_splice($numbers, $amount, count($numbers));
	foreach ($numbers as $number) {
		echo $number . "<br>";
	} */

	$numbers = [];
	$amount = 15;
	
	while (count($numbers) < $amount) {
		$randomInt = rand(1,100);
		if (!in_array($randomInt, $numbers)) {
			$numbers[] = $randomInt;
		}

	}
	var_dump($numbers)
	?>
</body>
</html>
