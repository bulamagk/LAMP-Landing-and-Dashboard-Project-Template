// Show Form Function
function showForm() {
  const modalContent = `
      <section class="modal_content">
        <section class="modal_header">
          <h3 class="modal_title">Add Department</h3>
          <button onclick="toggleModal()" class="btn btn--small btn--primary">
            Close
          </button>
        </section>
        <section class="modal_body">
          <form method="post">
            <section class="form-group">
              <label for="Department Name">Department Name</label>
              <input type="text" name="dept_name" id="deptName" required />
            </section>
            <section class="form-group">
              <button class="btn btn--primary btn--w-100" type="submit">
                Add
              </button>
            </section>
          </form>
        </section>
      </section>
`;

  modal.innerHTML = modalContent;
  toggleModal();
}

// Delete Department Function
async function deleteDepartment(eventTarget, id) {
  const tableData = eventTarget.parentElement;
  const tableRow = tableData.parentElement;
  const tableBody = tableRow.parentElement;

  let warningText = ` Note that this operation will also delete the exam officer of this
            department!`;

  toggleDeleteModal(warningText);
  const confirm = await confirmDelete();

  if (confirm) {
    // Delete
    try {
      toggleSpinner();
      setTimeout(() => {
        toggleSpinner();
        setNotification("Department Deleted Successfully!", "success");
        tableBody.removeChild(tableRow);
      }, 3000);
    } catch (error) {
    } finally {
      toggleDeleteModal();
    }
  } else {
    toggleDeleteModal();
  }
}
