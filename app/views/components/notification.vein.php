<div class="container">
	{if="count($errors) > 0"}
		{loop="$errors" as $error}
			<div class="alert alert-danger">
				{$error}
			</div>
		{/loop}
	{/if}

	{if="$session['success']"}
		<div class="alert alert-success">
			{$session['success']}
		</div>
	{/if}

	{if="$session['error']"}
		<div class="alert alert-danger">
			{$session['error']}
		</div>
	{/if}
</div>