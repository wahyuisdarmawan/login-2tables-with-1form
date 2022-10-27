<?php
  if(isset($_SESSION['user_username'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?menu_user">';
    exit;
  }elseif (isset($_SESSION['admin_username'])) {
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?menu_admin">';
    exit;
  }

  if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $u = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $gu = mysqli_fetch_array($u);

    $a = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
    $ga = mysqli_fetch_array($a);

    if (mysqli_num_rows($u) == 1) {
      $_SESSION['id_user'] = $gu['id_user'];
      $_SESSION['user_fullname'] = $gu['fullname'];
      $_SESSION['user_username'] = $gu['username'];
      $_SESSION['user_password'] = $gu['password'];
      $_SESSION['level_user'] = 'user';

      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?menu_user">';
      exit;
    } elseif (mysqli_num_rows($a) == 1) {
      $_SESSION['id_admin'] = $ga['id_admin'];
      $_SESSION['admin_fullname'] = $ga['fullname'];
      $_SESSION['admin_username'] = $ga['username'];
      $_SESSION['admin_password'] = $ga['password'];
      $_SESSION['level_admin'] = 'admin';

      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?menu_admin">';
      exit;
    } else {
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?signin">';
      exit;
    }
    
  }
?>

<main class="form-signin w-100 m-auto">
  <form method="POST" enctype="multipart/form-data">
    <center>
      <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>
    </center>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="username" autocomplete="off" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password"  autocomplete="off" required>
      <label for="floatingPassword">Password</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Sign in</button>
    
  </form>
</main>