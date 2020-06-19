        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Database</span>
              <a class="d-flex align-items-center text-muted" href="/add_database.php">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="/view_database.php">
                  <span data-feather="database"></span>
                  View Database
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/add_database.php">
                  <span data-feather="database"></span>
                  Add Database
                </a>
              </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Website</span>
              <a class="d-flex align-items-center text-muted" href="/add_website.php">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="/view_website.php">
                  <span data-feather="file"></span>
                  View Website
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/add_website.php">
                  <span data-feather="file"></span>
                  Add Website
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <?php if ( $_GET['success'] ) : ?>
            <div class="col-12 alert alert-success m1"><?php echo $_GET['success']; ?></div>
          <?php endif; ?>

          <?php if ( $_GET['error'] ) : ?>
            <div class="col-12 alert alert-danger m1"><?php echo $_GET['error']; ?></div>
          <?php endif; ?>
        </div>