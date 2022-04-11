<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<?php include 'application/views/'. $content_view; ?>
    <script src="/js/script.js" type="text/javascript"></script>

</body>
</html>
