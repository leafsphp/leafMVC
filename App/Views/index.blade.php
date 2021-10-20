<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ _env("APP_NAME", "Leaf MVC") }}</title>
  <link rel="shortcut icon" href="https://leafphp.netlify.app/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ ViewsPath("assets/css/styles.css") }}">
  <script src="https://unpkg.com/petite-vue" defer init></script>
</head>

<body>
  <div id="app" style="margin-top: 35px;">
    <section>
      <h1>{{ _env("APP_NAME", "Leaf MVC") }}</h1>
      <p>
        This is the LeafMVC framework. A simple MVC framework built for
        <a href="https://leafphp.netlify.app/#/leaf" class="text-green">Leaf PHP Framework</a>
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
    <section v-scope="{ show: 0 }">
      <button @click="show = !show">Learn Leaf MVC</button>
      <div class="collection" v-if="show" style="margin-top: 10px;">
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
</body>

</html>
