<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
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
<?php include 'includes/header.php'; ?>

<?php include $allowedPages[$currentPage]; ?>
<?php include 'includes/footer.php'; ?>
</body>

</html>