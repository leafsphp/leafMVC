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
		<h2>All Posts</h2>
		{if="count($posts) > 0"}
			{loop="$posts" as $post}
				<div style="margin-bottom: 50px;">
					<h3><a href="/posts/{$post->id}">{$post->title}</a></h3>
					<p>{$post->body}</p>
					<small>Written on {$post->created_at}</small>
				</div>
			{/loop}
			{$posts->links()}
		{else}
			There are no posts
		{/if}
	</div>
	<script src="/app/views/assets/js/jquery.min.js"></script>
	<script src="/app/views/assets/js/bootstrap.min.js"></script>
</body>
</html>