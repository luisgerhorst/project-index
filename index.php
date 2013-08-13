<?php

require_once('Parsedown.php');
require_once('simple_html_dom.php');

$md = file_get_contents('index.md');
$html = Parsedown::instance()->parse($md);

$dom = str_get_html($html);
$title = $dom->find('h1')[0]->plaintext;

?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	
	<title><?php echo $title; ?></title>
	
	<link href="style.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	
	<?php echo $html; ?>
	
</body>
</html>