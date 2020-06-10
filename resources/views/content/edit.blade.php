<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/edit.css">
    <title>Edit Data</title>
  </head>
  <body>
    <h1>Edit Page</h1>
    <div id="edit">
      <form class="" action="/edit" method="post">
        @csrf
        <input type="text" name="user" value="" placeholder="Old Username">
        <br>
        <input type="text" name="newUser" value="" placeholder="New Username">
        <br>
        <button type="submit" name="button">Edit</button>
      </form>
    </div>
    <br>
    <center>
      <a href="/dashboard" style="margin:auto auto;">Back To Dashboard</a>
    </center>

  </body>
</html>
