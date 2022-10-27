<?php
if (isset($_POST['signup'])) {
  $user_fullname = $_POST['fullname'];
  $user_username = $_POST['username'];
  $user_password = $_POST['password'];

  $data = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user WHERE username = '$user_username' OR password = '$user_password'"));

  if ($data > 0) {
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?signup">';
    exit;
  } else {
    $add = mysqli_query($db, "INSERT INTO user (id_user, fullname, username, password, level) 
    VALUES (NULL, '$user_fullname', '$user_username', '$user_password', 'user')");
    if ($add) {
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?signin">';
      exit;
    } else {
      echo "<script>alert('Failed Sign-up !!');</script>";
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?signup">';
      exit;
    }
    
  }
  
}
?>

<section id="cart" class="py-3 mb-5">
  <div class="container-fluid">
  <center><h5 class="font-baloo font-size-20 mb-5">User Sign-up</h5></center>
    <!--  profiles items   -->
    <div class="row">
      <div class="col-sm-12">
        <!-- cart item -->
        <div class="row border-top py-1 mt-1"></div>
          
        <form class="row g-3" method="POST">
            <div class="col-md-4">
                <label class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control" autocomplete="off" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" autocomplete="off" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" autocomplete="off" required>
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="signup">Sign-up</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>