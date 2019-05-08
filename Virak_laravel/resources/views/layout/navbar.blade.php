
<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{config('app.name')}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="home">PNC Timetables</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="teacher">Teacher</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="student">Students</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="room">Rooms</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="printable">Printable</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="statistics">Statistics</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
    @yield('content')

</div>

</body>
</html>


