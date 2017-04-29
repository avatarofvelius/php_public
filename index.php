<!DOCTYPE html>
<html lang="en">

<!-- Server-Side Includes -->
<?php include "_include/connection.php"; ?>
<?php include "_include/design.php"; ?>

<!-- Components -->
<?php include "_component/vue_application.php"; ?>
<?php include "_component/canvas_application.php"; ?>

<head>
	<!-- Style Sheets -->
	<link rel="stylesheet" media="screen" href="index.css" />
	<!-- <link rel="stylesheet" media="screen" href="css/_s.css" /> -->

	<!-- Component Style Sheets -->
	<link rel="stylesheet" href="_component/canvas_application.css" />

	<!-- Script Libraries -->
	<script type="text/javascript" src="_library/jquery.js"></script>

	<!-- Meta Information -->
	<title>PHP Template 4192017</title>
	<meta name="author" content="Matt T. Myers">
	<meta name="description" content="PHP Template">
	<meta keywords="avatarofvelius, Web Novel, PHP">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta charset="utf-8">
</head>

<body>
<?php display_header(); ?>

<?php //display_content_canvas(); ?>


<?php //display_content_vue(); ?>

<?php display_footer(); ?>
</body>

</html>
