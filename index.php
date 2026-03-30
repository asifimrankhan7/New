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
	<link rel="stylesheet" href="https://unpkg.com/photoswipe@5.4.4/dist/photoswipe.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
	<script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
	<script src="script.js" defer></script>
	<script type="module">
		import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.4.4/dist/photoswipe-lightbox.esm.js';
		const lightbox = new PhotoSwipeLightbox({
			gallery: '#featured-gallery, #portfolio-gallery',
			children: 'a.gallery-link',
			pswpModule: () => import('https://unpkg.com/photoswipe@5.4.4/dist/photoswipe.esm.js')
		});
		lightbox.init();
	</script>
</head>

<body>
	<?php include 'includes/header.php'; ?>
	<?php include $allowedPages[$currentPage]; ?>
	<?php include 'includes/footer.php'; ?>
</body>

</html>