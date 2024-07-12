<?php
// Set page
$page = 'exams';

// Require header
require_once('../inc/header.php')
?>

<!-- Page -->
<section class="page">
  <h2 class="page_title">Examinations Papers</h2>

  <!------Page Content------->
  <section class="page_content">
    <!-- Page Header Section -->
    <header class="page_header">
      <button onclick="showForm()" class="btn btn--small btn--primary">
        Upload Exam Paper
      </button>
    </header>
    <!-- End Page Header Section -->

    <!-- Exams Section -->
    <section class="table-responsive">
      <table id="table" class="table table-striped">
        <thead>
          <th>Course Code</th>
          <th>Course Title</th>
          <th>Department</th>
          <th>Exam Title</th>
          <th>Date</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr id="1">
            <td>CSC 101</td>
            <td>Introduction to Computer Science</td>
            <td>Computer Science</td>
            <td>End of First Semester Exams</td>
            <td>2022</td>

            <td class="action_td">
              <span title="Download">
                <a href="#">
                  <i class="fas fa-download"></i>
                </a>
              </span>
              <span title="Edit"><i class="fas fa-pen"></i></span>
              <span title="Delete" onclick="deleteDepartment(this, 1)"
                ><i class="fas fa-trash"></i
              ></span>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
    <!-- End Exams Section -->
  </section>
  <!------ End Page Content ------->
</section>
<!--End Page -->

<?php
require_once('../inc/footer.php')
?>
