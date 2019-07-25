<?php
$answerYes = 'yes';
$answerNo = 'no';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Exercice 2 PHP</title>
</head>
<body>
	<h1>Créer une variable answer. L'initialiser avec 'yes' ou 'no'.
		Si la réponse est 'yes' afficher le message 'Vous avez répondu 'oui'.'.
		Sinon afficher 'Vous avez répondu 'non'.'.</h1>
		<div style="color:blue"><p> 1er cas</p></div>
		<p> création variable $answer à oui</p>
		<?php
		if ($answerYes == 'yes') {
			echo 'Vous avez répondu oui ('. $answerYes. ')';
		}
		else {
			echo 'Vous avez répondu non ('. $answerYes. ')';
		}
		?>
		<div style="color:blue"><p> 2e cas</p></div>
			<p> création variable $answer à no</p>
			<?php
			if ($answerNo == 'yes') {
				echo '<p>Vous avez répondu oui ('. $answerNo. ')</p>';
			}
			else {
				echo '<p>Vous avez répondu non ('. $answerNo. ')</p>';
			}
			?>
	</body>
	</html>
