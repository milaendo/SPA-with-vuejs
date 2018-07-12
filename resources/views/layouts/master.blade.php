<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
        <title>HEEEY</title>
    </head>
    <body>
        <div id="app">
            @include( 'layouts.header')
          <div class="section">
            <div class="container">
              <router-view></router-view>
            </div>
          </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
