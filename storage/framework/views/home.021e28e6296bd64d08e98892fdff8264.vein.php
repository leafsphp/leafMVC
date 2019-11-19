<?php if(!class_exists('Leaf\Veins\Template')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo env('APP_NAME'); ?></title>
</head>
<body>
	<h2><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
	<ul>
		<?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $user ){ $counter1++; ?>
			<li><?php echo htmlspecialchars( $key1, ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( strtoupper($user['name']), ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
		<?php } ?>
	</ul>
</body>
</html>