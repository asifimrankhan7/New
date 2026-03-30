<?php require_once 'includes/data.php'; ?>
<?php
$allowedPages = [
	'home' => 'pages/home.php',
	'properties' => 'pages/properties.php',
	'about' => 'pages/about.php',
	'insights' => 'pages/insights.php',
	'offices' => 'pages/offices.php',
	'contact' => 'pages/contact.php',
];

$currentPage = $_GET['page'] ?? 'home';
if (!array_key_exists($currentPage, $allowedPages)) {
	$currentPage = 'home';
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>Aaron Holmes Residential | London & UK Property Experts</title>
	<meta name="description"
		content="Aaron Holmes Residential — award-winning estate agency based in Ilford. Residential sales, lettings, mortgages and conveyancing across East London and Essex." />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link
		href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap"
		rel="stylesheet" />
	<link rel="stylesheet" href="style.css" />
	<script>
		// Gallery data needed by the lightbox in script.js
		window.GALLERY_IMGS = <?= json_encode($GALLERY_IMGS) ?>;
	</script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<script src="script.js" defer></script>
</head>

<body>
	<?php include 'includes/header.php'; ?>

	<?php include $allowedPages[$currentPage]; ?>
	<?php include 'includes/footer.php'; ?>
</body>

</html>