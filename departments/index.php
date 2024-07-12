<?php
// Set page
$page = 'departments';

// Require header
require_once('../inc/header.php')
?>

<!-- Page -->
<section class="page">
  <h2 class="page_title">Departments</h2>

  <!------Page Content------->
  <section class="page_content">
    <!-- Page Header Section -->
    <header class="page_header">
      <button onclick="showForm()" class="btn btn--small btn--primary">
        Add Departments
      </button>
    </header>
    <!-- End Page Header Section -->

    <!-- Departments Section -->
    <section class="table-responsive">
      <table id="table" class="table table-striped">
        <thead>
          <th>Name</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr id="1">
            <td>Computer Science</td>
            <td class="action_td">
              <span><i class="fas fa-pen"></i></span>
              <span onclick="deleteDepartment(this, 1)"
                ><i class="fas fa-trash"></i
              ></span>
            </td>
          </tr>
          <tr>
            <td>Computer Science</td>
            <td class="action_td">
              <span title="Edit"><i class="fas fa-pen"></i></span>
              <span title="Delete"><i class="fas fa-trash"></i></span>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
    <!-- End Departments Section -->
  </section>
  <!------ End Page Content ------->
</section>
<!--End Page -->

<?php
require_once('../inc/footer.php')
?>
