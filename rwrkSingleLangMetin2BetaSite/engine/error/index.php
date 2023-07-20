<?php
	switch (key($_GET)) {
		case '400':
			$status = "Bad Request";
			$desc = "Błędne zapytanie";
			break;
		case '401':
			$status = "Unauthorized";
			$desc = "Dostęp wymaga autoryzacji.";
			break;
		case '403':
			$status = "Forbidden";
			$desc = "Dostęp został zabroniony.";
			break;
		case '404':
			$status = "Nie znaleziono";
			$desc = "Nie znaleziono pliku na serwerze.";
			break;
		case '500':
			$status = "Internal Server Error";
			$desc = "Wewnętrzny błąd serwera.";
			break;
		case '502':
			$status = "Bad Gateway";
			$desc = "Błąd bramy, zwrócona wartość przez serwer jest niepoprawna.";
			break;
		case '503':
			$status = "Service Unavailable";
			$desc = "Przeciążenie lub brak dostępności serwera.";
			break;
		case '504':
			$status = "Gateway Time-out";
			$desc = "Przekroczony czas oczekiwania na odpowiedz serwera.";
			break;
		case '505':
			$status = "HTTP Version not supported";
			$desc = "Ta wersji HTTP nie jest obsługiwana przez serwer.";
			break;
		default:
			$status = "";
			$desc = "";
			break;
	}
?>
﻿<!DOCTYPE html>
<html lang="pl">
	<head>
		<link rel="stylesheet" href="error.css">
		<meta charset="pl-PL.UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo "$status";?></title>
		<script>
			function goBack() {
				window.history.back();
			}
		</script>
	</head>
	<body>
		<h1>( ͡° ʖ̯ ͡°)</h1>
		<h2><?php echo "$status";?> - Error <?php echo (key($_GET));?></h2>
		<h3><?php echo "$desc";?></h3>
		<button onclick="goBack()">Cofnij!</button>
	</body>
</html>
