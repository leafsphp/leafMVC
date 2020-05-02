<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Leaf MVC</title>
  <!-- example asset import -->
  <link rel="stylesheet" href="../assets/css/wynter.css" />
  <style>
    .demo-ribbon {
      width: 100%;
      height: 40vh;
      flex-shrink: 0;
    }
  </style>
</head>

<body class="wynter bg-grey-100">
  <!-- you can break up components -->
  {include="../components/header"}

  <div class="demo-ribbon wynter bg-green-800"></div>
  <div class="wynter content" style="margin-top: -34.3vh; width: 100%;">
    <div class="wynter grid">
      <div class="wynter cell col-2 hide-on-tablet hide-on-phone"></div>
      <div class="wynter cell col-8 bg-white shadow-4dp content text-grey-800 padding default container">
        <h3>Yay, you're on Leaf MVC🎉</h3>
        <p>
          This is the LeafMVC framework. A simple MVC framework built for <a href="https://leafphp.netlify.app" class="wynter text-green">Leaf PHP Framework</a>
        </p>
        <h4>Getting Started</h4>
        <p>
          Open up <code>app/routes/web.php</code> to add your routes.
        </p>
        <p>
          Edit <code>app/views/pages/index.vein.php</code> and reload to see changes.
        </p>
        <p>
          Open up the root directory in your console and type <code>php leaf list</code> to view all available commands.
        </p>
        <h4>Learning LeafMVC</h4>
        <p>
          <ul class="wynter list">
            <li>
              <a href="https://leafmvc.netlify.app" class="wynter text-green">Read our informative docs</a>
            </li>
            <li>
              <a href="https://leafphp.netlify.app" class="wynter text-green">Read Leaf Framework's docs</a>
            </li>
          </ul>
        </p>
      </div>
      <div class="wynter cell col-2 hide-on-tablet hide-on-phone"></div>
    </div>
  </div>
</body>

</html>