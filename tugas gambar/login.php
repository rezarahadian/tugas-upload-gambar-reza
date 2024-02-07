<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SMK Negeri 1 Lagos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="halaman.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="judul">		
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="halaman.php">Home</a>
      </div>
    </div>
  </div>
  </div>
</nav>
    <div class="container-fluid">
    <div class="container mt-4">
    <h3>Login</h3><br>
    <form action="proses_login.php" method="POST">
    <!-- Email input -->
    <div class="form-outline mb-4 col-4">
        <label class="form-label" for="form2Example1">Username</label>
        <input type="text" id="username" name="username"class="form-control" />
    </div>
    <!-- Password input -->
    <div class="form-outline mb-4 col-4">
        <label class="form-label" for="form2Example2">Password</label>
        <input type="password" id="password" name="password" class="form-control"/>
    </div>
    <div class="form-outline mb-4 col-4">
        <button type="submit" class="btn btn-primary btn-block mb-4">sig in </buttom>
    </div>
</div>
</form>
</div>
</body>
</html>