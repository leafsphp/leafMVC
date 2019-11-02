<?php if(!class_exists('Leaf\Veins\Template')){exit;}?><!doctype html>
<html lang="en">
    <head>
        <title>React PHP starter Kit</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <script type="text/javascript">
        var user = {
            logged : <?php echo htmlspecialchars( $user->logged, ENT_COMPAT, 'UTF-8', FALSE ); ?>
        };
    </script>
    <body>
        <div id="app"></div>
        <script type="text/javascript" src="app/views/react/build/main.bundle.js" ></script>
    </body>
</html>