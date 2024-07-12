<?php
// Set page
$page = 'dashboard';

// Require header
require_once('../inc/header.php')
?>

  <!-- Page -->
  <section class="page">
    <h2 class="page_title">Dashboard</h2>

    <!------Page Content------->
    <section class="page_content">
      <!-- Stats -->
      <section class="stats">
        <a href="#" class="stat">
          <header class="stat_header">
            <h4>Total Exams Papers</h4>
            <i class="fas fa-folder-open fa-2x"></i>
          </header>
          <section class="stat_body">
            <p>460</p>
            <p>View All</p>
          </section>
        </a>
        <a href="#" class="stat">
          <header class="stat_header">
            <h4>Total Departments</h4>
            <i class="fas fa-building fa-2x"></i>
          </header>
          <section class="stat_body">
            <p>50</p>
            <p>View All</p>
          </section>
        </a>
        <a href="#" class="stat">
          <header class="stat_header">
            <h4>Total Exams Oficers</h4>
            <i class="fas fa-user-group fa-2x"></i>
          </header>
          <section class="stat_body">
            <p>400</p>
            <p>View All</p>
          </section>
        </a>
        <a href="#" class="stat">
          <header class="stat_header">
            <h4>Total Students</h4>
            <i class="fas fa-users fa-2x"></i>
          </header>
          <section class="stat_body">
            <p>400</p>
            <p>View All</p>
          </section>
        </a>
      </section>
      <!-- End Stats -->

      <!-- Full Calendar -->
      <div class="calendar" id="calendar"></div>
      <!-- End Full Calendar -->
    </section>
    <!------ End Page Content ------->
  </section>
  <!--End Page -->

<?php
require_once('../inc/footer.php')
?>