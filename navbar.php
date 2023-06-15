<!DOCTYPE html>
<html>
<head>
  <title>Comlab Utilization System</title>
  <style>
    /* Reset default browser styles */
    body {
      background-color: white;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Global styles */
    body {
      font-family: Arial, sans-serif;
      background-color: white;
    }

    /* Navbar styles */
    .navbar {
      background-color: #333;
      color: #fff;
    }

    .navbar .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .navbar ul.navbar-nav {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    .navbar ul.navbar-nav li {
      display: inline-block;
    }

    .navbar ul.navbar-nav li a {
      display: block;
      padding: 10px 15px;
      color: #fff;
      text-decoration: none;
    }

    .navbar ul.navbar-nav li a:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <?php include_once("header.php"); ?>

  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand">Comlab Utilization System</a>
      </div>
      <div>
        <ul class="navbar-nav">
          <li><a href="home.php"><span></span> Home</a></li>
          <li><a href="addsubject.php"><span></span> Add Subjects</a></li>
          <li><a href="addfaculty.php"><span></span> Add Faculty</a></li>
          <li><a href="addcourse.php"><span></span> Add Course</a></li>
          <li><a href="addroom.php"><span></span> Room</a></li>
          <li><a href="addtime.php"><span></span> Time</a></li>
          <li><a href="list.php"><span></span> List</a></li>
          <li><a href="tablelist.php"><span></span> Tables</a></li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>
