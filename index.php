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
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="./build.css">
</head>

<body class="font-mont">
	<header class="bg-koko">
		<div class="container mx-auto">
			<?php require_once "./nav.php"; ?>
		</div>
	</header>
	<main class="container container-bg mx-auto min-h-screen">

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
	<div class="footer flex-col mx-auto text-center bg-koko text-sm py-3">
		<?php
		require_once "./footer.php";
		?>
	</div>
	<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

</body>

</html>