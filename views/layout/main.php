<?php

use app\core\Application;

echo "<pre>";
var_dump(Application::$app->user);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap && Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- Font awesome -->
  <link rel="stylesheet" href="assets/all.min.css">
  <title>Home</title>
</head>

<body>

  <div style="min-width: 350px;">

    <nav class="navbar navbar-expand-lg bg-light p-2">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="/images/logo1.png" alt="logo image" style="width: 40px;">
          SchMgt
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home">DASHBOARD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users">USERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="classes">CLASSES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tests">TESTS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                USER
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="profile">Profile</a></li>
                <li><a class="dropdown-item" href="home">Dashboard</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    {{content}}

  </div>

  <!-- Optional JS Cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>