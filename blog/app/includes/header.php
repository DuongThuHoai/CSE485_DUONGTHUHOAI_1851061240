<header>
    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
      <h1 class="logo-text"></h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
      <!-- <li><a href="<?php echo BASE_URL . '/about.php' ?>">Admin Info</a></li> -->
      <li><a href="http://localhost/CSE485_DUONGTHUHOAI_1851061240/home.php">Back to CV</a></li>

      <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Quản trị</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
      <?php endif; ?>
    </ul>
</header>