<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Programs</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('navbar.nav')
        @include('inc.messages')
    <br>
    <div class="container">
          @yield('content')

    </div>



  </body>
</html>
