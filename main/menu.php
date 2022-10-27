<?php
if(isset($_SESSION['user_username'])){ 
  $user_fullname = $_SESSION['user_fullname'];
  $user_username = $_SESSION['user_username'];
  $level_user = $_SESSION['level_user'];
  ?>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="?menu_user" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/logo.jpg" alt="" width="40" height="40">
        Sign-in
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="?menu_user" class="nav-link px-2 <?= (isset($_GET['menu_user'])) ? 'active' : 'link-dark' ?>">Menu User</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a type="button" href="?signout" class="btn btn-danger">Sign-out</a>
      </div>
    </header>
  </div>
  
<?php }elseif (isset($_SESSION['admin_username'])) {
  $admin_fullname =  $_SESSION['admin_fullname'];
  $admin_username = $_SESSION['admin_username'];
  $level_admin = $_SESSION['level_admin'];
  ?>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="?menu_admin" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/logo.jpg" alt="" width="40" height="40">
        Sign-in
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="?menu_admin" class="nav-link px-2 <?= (isset($_GET['menu_admin'])) ? 'active' : 'link-dark' ?>">Menu Admin</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a type="button" href="?signout" class="btn btn-danger">Sign-out</a>
      </div>
    </header>
  </div>
  
<?php } else { ?>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="?menu" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/logo.jpg" alt="" width="40" height="40">
        Sign-in
      </a>

      <ul class="nav nav-pills">
        <li><a href="?menu" class="nav-link px-2 <?= (isset($_GET['menu'])) ? 'active' : 'link-dark' ?>">Menu Default</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a type="button" href="?signin" class="btn btn-outline-primary me-2">Sign-in</a>
        <a type="button" href="?signup" class="btn btn-primary">Sign-up</a>
      </div>
    </header>
  </div>

<?php } ?>


