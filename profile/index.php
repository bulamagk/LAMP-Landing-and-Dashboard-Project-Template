<?php
// Set page
$page = 'profile';

// Require header
require_once('../inc/header.php')
?>

<!-- Page -->
<section class="page">
  <h2 class="page_title">Profile</h2>

  <!------Page Content------->
  <section class="page_content">
    <!-- Page Header Section -->
    <header class="page_header">
      <button onclick="showForm()" class="btn btn--small btn--primary">
        Update Profile
      </button>
    </header>
    <!-- End Page Header Section -->

    <!-- Profile Section -->
    <section class="profile-card">
      <table class="table">
        <tr>
          <th>Matriculation No</th>
          <td>CSC/17D/4415</td>
        </tr>
        <tr>
          <th>Name</th>
          <td>Peter Bulama</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>bulamagk@gmail.com</td>
        </tr>
      </table>
    </section>
    <!-- End Profile Section -->
  </section>
  <!------ End Page Content ------->
</section>
<!--End Page -->
 
<?php
require_once('../inc/footer.php')
?>
