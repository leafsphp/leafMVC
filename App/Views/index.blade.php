<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ getenv('APP_NAME') ?? "Leaf MVC" }}</title>
  <link rel="shortcut icon" href="https://leafphp.netlify.app/img/logo.png" type="image/x-icon">
  <style>
    body {
      margin: 0;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      font: 12px/1.5 Helvetica, Arial, Verdana, sans-serif;
      background: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4)), url(https://png2.cleanpng.com/sh/375be993a25389a95277a8caa09e98e0/L0KzQYm3UsA3N5RufZH0aYP2gLBuTfZwepZ4jJ97b4nkfMXCTfZzbZYyhNN3ZIPmccHsTfNtcaEyeeR9LX7ohrLrgb11epZqi58AYUfkRraAVcBmQJM8TpC7N0i6SIa7UcE2OWgAT6U6MEmzRYq9TwBvbz==/kisspng-forest-royalty-free-landscape-clip-art-nevada-trees-5a7a6e750e8b76.2787854115179731090596.png);
    }

    h1 {
      margin: 0;
      font-size: 48px;
      font-weight: normal;
      line-height: 48px;
    }

    h2 {
      margin-bottom: 5px;
    }

    a,
    h1,
    strong {
      color: #038f03;
    }

    a:hover {
      background-color: #eee;
      border-radius: 4px;
    }

    .collection {
      display: flex;
      flex-direction: column;
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 20px;
      background: white;
    }

    .collection a {
      padding: 8px 0px;
      text-decoration: none;
    }

    .collection a:not(:last-child) {
      border-bottom: 1px solid #ddd;
    }

    code {
      background-color: #eee;
      padding: 4px;
      border-radius: 2px;
    }

    ul {
      padding-left: 15px;
    }

    section:not(:last-child) {
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <div id="app">
    <section>
      <h1>{{ getenv('APP_NAME') ?? "Leaf MVC" }}</h1>
      <p>
        This is the LeafMVC framework. A simple MVC framework built for <a href="https://leafphp.netlify.app" class="wynter text-green">Leaf PHP Framework</a>
      </p>
    </section>
    <section>
      <h2>Getting Started</h2>
      <ul>
        <li>Open up <code>App/Routes/index.php</code> to add your routes.</li>
        <li>Edit <code>App/Views/index.blade.php</code> and reload to see changes.</li>
        <li>Open up the root directory in your console and type <code>php leaf list</code> to view all available commands.</li>
        <li>Grow something amazing. Happy gardening!</li>
      </ul>
    </section>
    <section>
      <h2>Learning Leaf MVC</h2>
      <div class="collection">
        <a href="https://leafmvc.netlify.app" target="_blank" class="collection-item">Read our informative docs</a>
        <a href="https://leafphp.netlify.app" target="_blank" class="collection-item">Read Leaf Framework's docs</a>
        <a href="https://twitter.com/leafphp" target="_blank" class="collection-item">Follow @leafphp on twitter for updates on Leaf</a>
        <a href="https://www.youtube.com/channel/UCllE-GsYy10RkxBUK0HIffw" target="_blank" class="collection-item">Subscribe to our Youtube channel</a>
      </div>
    </section>
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