<?php
session_start();
require_once "./config.php";
require "./counter.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo $site_name; ?>
	</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="./output.css">
	<!-- <link rel="stylesheet" href="./build.css"> -->
</head>

<body class="font-mont">
	<header class="bg-koko">
		<div class="container mx-auto">
			<?php require_once "./nav.php"; ?>
		</div>
	</header>
	<main class="container container-bg mx-auto min-h-screen ">

		<?php
		if (isset($_GET['page'])) {
			echo "<section>";
			require_once "./" . $_GET["page"] . ".php";
			echo "</section>";
		} else {
			echo "<section>";
			require_once "./news.php";
			echo "</section>";
		}
		?>
	</main><!-- div container -->
	<div class="footer flex-col mx-auto text-center bg-koko text-sm py-12">
		<?php
		require_once "./footer.php";
		?>
	</div>
	<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

</body>

</html>