{if="count($errors) > 0"}
	{loop="$errors" as $error}
		<div class="alert alert-danger">
			{$error}
		</div>
	{/loop}
{/if}

{if="$_SESSION['succeess']"}
	<div class="alert alert-success">
		$_SESSION['success']
	</div>
{/if}

{if="$_SESSION['error']"}
	<div class="alert alert-danger">
		$_SESSION['error']
	</div>
{/if}