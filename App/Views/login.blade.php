<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - {{ getenv('APP_NAME') ?? "Leaf MVC" }}</title>
  <link rel="shortcut icon" href="https://leafphp.netlify.app/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ views_path("assets/css/styles.css", true) }}">
</head>

<body>
  <div id="app">
    <section>
      <h1>Login</h1>
      <p>
        Sign into {{ getenv('APP_NAME') ?? "Leaf MVC" }}
      </p>
    </section>
    <form action="/auth/login" method="post">
        <div>
            <input type="text" name="username" placeholder="username" value="{{ $username ?? '' }}">
            <p>{{ $errors['username'] ?? $errors['auth'] ?? null }}</p>
        </div>
        <div>
            <input type="password" name="password" placeholder="password" value="{{ $password ?? '' }}">
            <p>{{ $errors['password'] ?? null }}</p>
        </div>
        <button>Login</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
  <script>
    new Vue({
      el: "#app",
      data() {
        return {
          showExtras: false,
        };
      },
    });
  </script>
</body>

</html>