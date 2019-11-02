<?php 
$user = (object) [
    'name' => 'Jane Doe',
    'email' => 'janedoe@gmail.com',
    'logged' => true
];
?>
<!doctype html>
<html lang="en">
    <head>
        <title>React PHP starter Kit</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <script type="text/javascript">
        var myApp = {
            user : <?php echo json_encode($user); ?>,
            logged : <?php echo $user->logged; ?>
        };
    </script>
    <body>
        <div id="app"></div>

        <script type="text/javascript" src="../../public/assets/bundle/main.bundle.js" ></script>
    </body>
</html>