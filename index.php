<?php

require_once('parsedown.php');
require_once('simple-html-dom.php');

$md = file_get_contents('index.md');
$html = Parsedown::instance()->parse($md);

$dom = str_get_html($html);
$title = $dom->find('h1')[0]->plaintext;

?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1"/>
	<meta name="robots" content="all">
	<meta name="date" content="2013-08-14 14:32">
	
	<title><?php echo $title; ?></title>
	
	<link href="style.css" rel="stylesheet" type="text/css">
	
</head>
<body>

	<div id="box">
		<?php echo $html; ?>
	</div>
	
</body>
</html>