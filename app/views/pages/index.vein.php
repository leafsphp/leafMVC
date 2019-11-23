<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Leaf MVC</title>
	<link rel="stylesheet" href="/app/views/assets/css/bootstrap.min.css">
</head>
<body>
  {include="../components/header"}

  <div class="container">
    <div class="jumbotron">
      <h1>Hurray! You're now on LeafMVC!!</h1>
      <p style="line-height: 35px;">
        This is the LeafMVC framework. Quickly create web apps and APIs. Open up <i>app/routes/web.php</i> to add your routes. <br>
        Edit <i>app/views/pages/index.vein.php</i> and reload to see changes. <br>
        Open up the root directory in your console and type <code>php leaf list</code> to view all available commands.
      </p>
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-success" style="color: white;" href="https://leaf-docs.netlify.com" target="_blank">View Leaf Core docs &raquo;</a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-primary" style="color: white;" href="https://leafmvc.netlify.com" target="_blank">View LeafMVC docs &raquo;</a>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
	<script src="/app/views/assets/js/jquery.min.js"></script>
	<script src="/app/views/assets/js/bootstrap.min.js"></script>
</body>
</html>