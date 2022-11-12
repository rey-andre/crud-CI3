<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SCMIC | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/login.css" />
  </head>
  <body>
    <!-- form login -->
    <div class="wrapper">
        <?php
        if(isset($_GET['pesan'])){
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Gagal!</strong> <?php echo $_GET['pesan'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        } ?>

      <div class="logo">
        <img src="https://www.kindpng.com/picc/m/434-4346523_city-logo-smart-smart-city-logo-png-transparent.png" alt="City Logo Smart - Smart City Logo Png, Transparent Png@kindpng.com" alt="SCMIC" />
      </div>
      <div class="text-center mt-4 name">SCMIC | Admin</div>
      <form class="p-3 mt-3" action="function/cekLogin.php" method="POST">
        <div class="form-field d-flex align-items-center">
          <span class="far fa-user"></span>
          <input type="text" name="username" id="username" placeholder="Username" />
        </div>
        <div class="form-field d-flex align-items-center">
          <span class="fas fa-key"></span>
          <input type="password" name="password" id="password" placeholder="Password" />
        </div>
        <button class="btn mt-3 " name="btnLogin">Login</button>
      </form>
      <!-- <div class="text-center fs-6"><a href="#">Forget password?</a> or <a href="#">Sign up</a></div> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
