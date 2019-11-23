<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{function="env('APP_NAME')"}</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/app/views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
	{include="../../components/header"}
	{include="../../components/notification"}	

	<div class="container">
		<p>
			<button onclick="window.history.back()" class="btn btn-dark">Go Back</button>
		</p>
		<h1 class="text-primary">{$post->title}</h1>
		<p style="font-size: 20px;">{$post->body}</p>
		<small>Written on {$post->created_at}</small><br>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>