<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="{{ views_path("assets/css/styles.css", true) }}">
</head>
<body>
    <div>
        <section>
            <h1>Update User</h1>
            <p>
                Edit your {{ getenv('APP_NAME') ?? "Leaf MVC" }} account.
            </p>
        </section>
        <form action="/user/update" method="post">
            <div>
                <input type="text" name="username" placeholder="username" value="{{ $username ?? '' }}">
                <p>{{ $errors['username'] ?? $errors['auth'] ?? null }}</p>
            </div>
            <div>
                <input type="email" name="email" placeholder="email" value="{{ $email ?? '' }}">
                <p>{{ $errors['email'] ?? $errors['auth'] ?? null }}</p>
            </div>
            <button>Update Account</button>
        </form>
        
        <a href="/user">Back to account</a>
    </div>
</body>
</html>