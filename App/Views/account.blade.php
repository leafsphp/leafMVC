<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="{{ views_path("assets/css/styles.css", true) }}">
</head>
<body>
    <div>
        <h2>Account</h2>
        <p>This is the Account page.</p>
        <ul>
            @foreach ($keys as $key)
                <li>
                    <b>{{ $key }}</b>: {{ $user[$key] }}
                </li>
            @endforeach
        </ul>
        <br>
        <a href="/user/update">Edit your account</a>
        <br>
        <a href="{{ authConfig('logout') }}">Logout</a>
    </div>
</body>
</html>
