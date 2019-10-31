<?php if(!class_exists('Leaf\Veins\Template')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Leaf MVC</title>
</head>
<body>
	<h2>
		<?php $counter1=-1;  if( isset($notes) && ( is_array($notes) || $notes instanceof Traversable ) && sizeof($notes) ) foreach( $notes as $key1 => $value1 ){ $counter1++; ?>
			<?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?> <br>
		<?php } ?>
	</h2>
</body>
</html>