<?php
// Set page
$page = 'examsofficer';

// Require header
require_once('../inc/header.php')
?>

<!-- Page -->
<section class="page">
  <h2 class="page_title">Examinations Officers</h2>

  <!------Page Content------->
  <section class="page_content">
    <!-- Page Header Section -->
    <header class="page_header">
      <button onclick="showForm()" class="btn btn--small btn--primary">
        Register Exam Officer
      </button>
    </header>
    <!-- End Page Header Section -->

    <!-- Examination Officers Section -->
    <section class="table-responsive">
      <table id="table" class="table table-striped">
        <thead>
          <th>Name</th>
          <th>Department</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr id="1">
            <td>Kadams</td>
            <td>Computer Science</td>
            <td class="action_td">
              <span><i class="fas fa-pen"></i></span>
              <span onclick="deleteDepartment(this, 1)"
                ><i class="fas fa-trash"></i
              ></span>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
    <!-- End Examination Officers Section -->
  </section>
  <!------ End Page Content ------->
</section>
<!--End Page -->

<?php
require_once('../inc/footer.php')
?>
