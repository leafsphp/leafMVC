<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - {{ getenv('APP_NAME') ?? "Leaf MVC" }}</title>
  <link rel="shortcut icon" href="https://leafphp.netlify.app/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ views_path("assets/css/styles.css", true) }}">
</head>

<body>
  <div id="app">
    <section>
      <h1>Sign Up</h1>
      <p>
        Create your {{ getenv('APP_NAME') ?? "Leaf MVC" }} account.
      </p>
    </section>
    <form action="/auth/register" method="post">
        <div>
            <input type="text" name="username" placeholder="username" value="{{ $username ?? '' }}">
            <p>{{ $errors['username'] ?? $errors['auth'] ?? null }}</p>
        </div>
        <div>
            <input type="email" name="email" placeholder="email" value="{{ $email ?? '' }}">
            <p>{{ $errors['email'] ?? $errors['auth'] ?? null }}</p>
        </div>
        <div>
            <input type="password" name="password" placeholder="password" value="{{ $password ?? '' }}">
            <p>{{ $errors['password'] ?? null }}</p>
        </div>
        <button>Register</button>
    </form>
  </div>
</body>

</html>