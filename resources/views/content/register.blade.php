<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/register.css">
    <title>Register</title>
  </head>
  <body>
    @include('shared.header')
    <hr>
    <div class="container">
      <h1 id="judul">Register</h1>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      <br>
      <div id="inputan">
        <form class="" action="/register" method="post">
          @csrf
          <label for="" id="reg-items">username</label>
          <input type="text" name="nama" value="" id="reg-items">
          <label for="" id="reg-items">Email</label>
          <input type="email" name="email" value="" id="reg-items">
          <label for="" id="reg-items">Password</label>
          <input type="password" name="pass" value="" id="reg-items">
          <br><br>
          <button type="submit" name="button" id="reg-items">Submit</button>
        </form>
      </div>
    </div>
    <hr>
    @include('shared.footer')
  </body>
</html>
