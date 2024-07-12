const aside = document.querySelector(".aside");
const modal = document.querySelector(".modal");
const logoutModal = document.querySelector(".logout-modal");
const deleteModal = document.querySelector(".delete-modal");
const deleteWarning = document.querySelector(".delete-warning");
const overlay = document.querySelector(".overlay");
const spinner = document.querySelector(".spinner-container");

/*
 *   TOGGLERS HERE
 *   Menu Toggler
 *   Spinner Toggler
 */
// Toggle Menu Function
function toggleMenu() {
  aside.classList.toggle("toggle");
  overlay.classList.toggle("toggle");
}

// Toggle Spinner
function toggleSpinner() {
  spinner.classList.toggle("show");
}

/*
 *   HANDLERS HERE
 *   Logout Handler
 *   Delete Handler
 */
// Handle logout
function toggleModal() {
  modal.classList.toggle("show");
}

function logout() {
  logoutModal.classList.toggle("show");
}

function yesLogout() {
  console.log("logout");
  window.location.href = "../logout";
}

function noLogout() {
  logoutModal.classList.toggle("show");
}

// Handle Delete Modal
function toggleDeleteModal(warningText = "") {
  if (warningText) {
    deleteWarning.innerHTML = warningText;
  }
  deleteModal.classList.toggle("show");
}

// Handle Delete Button
async function confirmDelete() {
  return new Promise((resolve, reject) => {
    // Proceed to delete
    document.querySelector("#yesDelete").addEventListener("click", () => {
      resolve(true);
    });

    // Proceed to delete
    document.querySelector("#noDelete").addEventListener("click", () => {
      resolve(false);
    });
  });
}

/*
 *   INITIALIZERS HERE
 *   Full Calendar Initializer
 *   DataTable Initializer
 */
// Initialize Full Calendar
document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth", // Display the calendar in month view
  });

  calendar.render();
});

// Initialize DataTable
new DataTable("#table");
