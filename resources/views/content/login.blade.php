<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/login.css">
  </head>
  <body>
    @include('shared.header')
    <hr>
      <div class="container">
        <center>
          <form class="" action="/login" method="post">
            @csrf
            <label for="" id="login-items">Username</label>
            <input type="text" name="username" value="" id="login-items">
            <br>
            <label for="" id="login-items">password</label>
            <input type="password" name="password" value="" id="login-items">
            <br>
            <div id="bottom">
              <a href="/register">Register</a>
              <button type="submit" name="button">Submit</button>
            </div>
          </form>
        </center>
      </div>
    <hr>
    @include('shared.footer')
  </body>
</html>
