<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Welcome to Dashboard</title>
  </head>
  <body>
    @include('shared.headerLogout')
    <hr>
    <h1 style="text-align:center;">Welcome To Dashboard</h1>
    <center>
      @foreach($users as $key => $data)
        <li>{{ $data->username ,'-', $data->email }}</li>
      @endforeach
      <br>
      <form class="" action="/Delete" method="get">
        @csrf
        <input type="text" name="inputan" value="">
        <br><br>
        <div class="" id="submitan">
          <button type="submit" name="button" class="btn btn-danger">Delete</button>
          <a href="/edit" class="btn btn-primary">Edit</a>
        </div>
      </form>
    </center>
    <hr>
    @include('shared.footer')
  </body>
</html>
