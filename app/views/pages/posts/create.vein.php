<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{function="env('APP_NAME')"}</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/app/views/assets/css/bootstrap.min.css">
</head>
<body>
	{include="../../components/header"}
	{include="../../components/notification"}
	
	<div class="container">
		<h2>Create Post</h2>
		<div class="body">
			<form action="/posts" method="post">
				<div class="form-group">
					<label id="title">Title</label>
					<input type="text" name="title" class="form-control" placeholder="This is my title" required>
				</div>
				<div class="form-group">
					<label id="body">Body</label>
					<textarea type="text" name="body" class="form-control" placeholder="This is my body" rows="7" required></textarea>
				</div>
				<button type="submit" name="add-posts-btn" class="btn btn-primary">Submit Post</button>
			</form>
		</div>
	</div>
	<script src="/app/views/assets/js/jquery.min.js"></script>
	<script src="/app/views/assets/js/bootstrap.min.js"></script>
</body>
</html>