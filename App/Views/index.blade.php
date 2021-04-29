<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ getenv('APP_NAME') ?? "Leaf MVC" }}</title>
  <link rel="shortcut icon" href="https://leafphp.netlify.app/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ views_path("assets/css/styles.css") }}">
</head>

<body>
  <div id="app" style="margin-top: 35px;">
    <section>
      <h1>{{ getenv('APP_NAME') ?? "Leaf MVC" }}</h1>
      <p>
        This is the LeafMVC framework. A simple MVC framework built for
        <a href="https://leafphp.netlify.app" class="text-green">Leaf PHP Framework</a>
      </p>
    </section>
    <section>
      <h2>Getting Started</h2>
      <ul>
        <li>Open up <b><code>App/Routes/index.php</code></b> to add your routes.</li>
        <li>Edit <b><code>App/Views/index.blade.php</code></b> and reload to see changes.</li>
        <li>
            Open up the root directory in your console and type <code>php leaf list</code>
            to view all available commands.
        </li>
        <li>Grow something amazing. Happy gardening!</li>
      </ul>
    </section>
    <section>
      <button @click="showExtras = !showExtras">Learn Leaf MVC</button>
      <div class="collection" v-if="showExtras">
        <a href="https://leafphp.netlify.app/#/leaf-mvc/" target="_blank" class="collection-item">
            Read our informative docs
        </a>
        <a href="https://leafphp.netlify.app/#/leaf/" target="_blank" class="collection-item">
            Read Leaf Framework's docs
        </a>
        <a href="https://twitter.com/leafphp" target="_blank" class="collection-item">
            Follow @leafphp on twitter for updates on Leaf
        </a>
        <a href="https://www.youtube.com/channel/UCllE-GsYy10RkxBUK0HIffw" target="_blank" class="collection-item">
            Subscribe to our Youtube channel
        </a>
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
