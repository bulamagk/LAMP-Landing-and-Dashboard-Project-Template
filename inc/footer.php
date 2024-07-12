</section>
      <!-- End Right Section -->

      <!-- Overlay -->
      <section onclick="toggleMenu()" class="overlay"></section>
      <!-- End Overlay -->
    </main>

    <!-- Modal -->
    <section class="modal"></section>
    <!-- End Modal -->

    <!-- Logout Modal -->
    <section class="logout-modal">
      <section class="logout-modal_content">
        <section class="logout-icon">
          <i class="fas fa-question fa-6x"></i>
        </section>
        <section class="logout-action">
          <h3>Logout</h3>
          <section class="logout-modal_buttons">
            <button
              onclick="yesLogout()"
              class="btn btn--primary btn--small btn--w-100"
            >
              Yes
            </button>
            <button
              onclick="noLogout()"
              class="btn btn--alt btn--small btn--w-100"
            >
              No
            </button>
          </section>
        </section>
      </section>
    </section>
    <!-- End Logout Modal -->

    <!-- Delete Modal -->
    <section class="delete-modal">
      <section class="delete-modal_content">
        <section class="delete-icon">
          <i class="fas fa-question fa-6x"></i>
        </section>
        <section class="delete-action">
          <h3>Delete</h3>
          <span class="delete-warning"> </span>
          <section class="delete-modal_buttons">
            <button
              id="yesDelete"
              class="btn btn--primary btn--small btn--w-100"
            >
              Yes
            </button>
            <button id="noDelete" class="btn btn--alt btn--small btn--w-100">
              No
            </button>
          </section>
        </section>
      </section>
    </section>
    <!-- End Delete Modal -->

    <!-- Notification -->
    <section id="notification" class="alert"></section>
    <!-- End Notification -->

    <!-- Spinner -->
    <section class="spinner-container">
      <section class="spinner"></section>
    </section>
    <!-- End Spinner -->

    <!-- Libraries -->
    <script src="../assets/vendors/datatable/js/jquery.js"></script>
    <script src="../assets/vendors/datatable/js/bootstrap-datatable.js"></script>
    <script src="../assets/vendors/datatable/js/datatable.js"></script>
    <script src="../assets/vendors/fontawesome-free-6.4.2-web/js/all.js"></script>
    <script src="../assets/vendors/fullcalendar/script.js"></script>
    <!-- End Libraries -->

    <!-- My Script -->
    <script src="../assets/js/notification.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/<?=$page.'.js'?>"></script>
    <!-- End My Script -->
  </body>
</html>
