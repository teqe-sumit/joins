

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>joins</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for sidebar */
    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 2;
      left: 0;
      background-color: #D3D3D3;
      
      padding-top: 50px;
    }
    /* Custom CSS for content area */
    .content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>
<body>

<!-- Titlebar --><div class="fixed-top">
<nav class="navbar navbar-dark bg-secondary">
  <span class="navbar-brand mb-0 h1">Laravel Joins Using Query Builder</span>
  
</nav>
</div><br><hr>

<!-- Sidebar -->
<div class="sidebar">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="/">Salary By Role</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/right">Occupation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/left">Departments</a>
    </li>
  </ul>
</div>

<!-- Main content area -->

<div class="content">
  <div class="float-left"><h2>@yield('title')</h2></div>
 <div class="content float-right"> <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  
  </div>
  <table class="table table-sm">  
  @yield('leftjoin')
  @yield('rightjoin')
  @yield('innerjoin')
</div>

<!-- Footer -->
<footer class="footer bg-secondary text-light text-center py-3 fixed-bottom">
  <div class="container">
    Footer Content
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
