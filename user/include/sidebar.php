<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        <a class="navbar-brand px-4 py-3 m-0 mt-1" href="book-view.php">
            <img src="assets/img/navbar-logo.png" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-4">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'book-view.php' ? 'active bg-gradient-dark text-white' : 'text-dark'; ?>" href="book-view.php">
                    <i class="material-symbols-rounded opacity-5">visibility</i>
                    <span class="nav-link-text ms-1">Book List</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark <?php echo in_array(basename($_SERVER['PHP_SELF']), ['book-add.php']) ? 'active bg-gradient-dark text-white' : 'text-dark'; ?>" href="book-add.php">
                    <i class="material-symbols-rounded opacity-5">add</i>
                    <span class="nav-link-text ms-1">Add Book</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-dark <?php echo in_array(basename($_SERVER['PHP_SELF']), ['book-edit.php']) ? 'active bg-gradient-dark text-white' : 'text-dark'; ?>" href="book-edit.php">
                    <i class="material-symbols-rounded opacity-5">edit</i>
                    <span class="nav-link-text ms-1">Edit Book</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark <?php echo in_array(basename($_SERVER['PHP_SELF']), ['maintenance.php', 'maintenance-history.php']) ? 'active bg-gradient-dark text-white' : 'text-dark'; ?>" href="maintenance.php">
                    <i class="material-symbols-rounded opacity-5">archive</i>
                    <span class="nav-link-text ms-1">Archive Book</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0">
        <div class="mx-3">
            <a style="background-color: rgb(255, 200, 0);" class="btn text-white mt-4 w-100" href="logout.php" onclick="return confirm('Are you sure you want to logout?')">
                <i class="fa fa-sign-out me-2"></i> Logout
            </a>
        </div>
    </div>
</aside>