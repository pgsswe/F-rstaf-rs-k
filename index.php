<?php
$submitted = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$submitted = isset($_POST['text']) ? trim($_POST['text']) : '';
}

$label = $submitted === '' ? 'Rad' : $submitted;
?>
<!doctype html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Visa sträng med radnummer</title>
</head>
<body>
	<h1>Visa sträng med radnummer (1–10)</h1>

	<form method="post" action="">
		<label for="text">Skriv en sträng (lämna tom för "Rad"):</label>
		<input type="text" id="text" name="text" value="<?php echo htmlspecialchars($submitted, ENT_QUOTES, 'UTF-8'); ?>">
		<button type="submit">Visa</button>
	</form>

	<h2>Resultat</h2>
	<ol>
		<?php for ($i = 1; $i <= 10; $i++): ?>
			<li><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . ' ' . $i; ?></li>
		<?php endfor; ?>
	</ol>

</body>
</html>

