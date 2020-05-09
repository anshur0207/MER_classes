<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="assets/style1.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
    <div class="container">
      <a href="index.php" class="navbar-brand text-warning font-weight-bold">MER CLASSES</a>
      <a href="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="collapsenavbar">

         <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link text-white">Home</a>
          </li>
          <li class="nav-item">
            <a href="courses.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Courses</a>
          </li>
          <li class="nav-item">
            <a href="result.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Results</a>
          </li>
          <li class="nav-item">
            <a href="faculty.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Faculty</a>
          </li>
          <li class="nav-item">
            <a href="gallery.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Gallery</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;About Us</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Contact Us</a>
          </li>
          <li class="nav-item">
            <a href="logi.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Ebooks</a>
          </li>
        </ul>


      
      </div>
    </a>
  </div>
</nav>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="api/user/login.php" method="GET">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="./api/user/signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php include('includes/footer.php');
  ?>