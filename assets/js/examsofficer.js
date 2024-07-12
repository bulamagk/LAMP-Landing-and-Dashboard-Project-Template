// Show Form Function
function showForm() {
  const modalContent = `
    <section class="modal_content">
        <section class="modal_header">
          <h3 class="modal_title">Register Exams Officer</h3>
          <button onclick="toggleModal()" class="btn btn--small btn--primary">
            Close
          </button>
        </section>
        <section class="modal_body">
          <form method="post">
            <section class="form-group">
              <label for="Department">Department</label>
              <select name="department" id="department" required>
                <option value="">--Select Department--</option>
              </select>
            </section>
            <section class="form-fields-group">
              <section class="form-group">
                <label for="Name">Name</label>
                <input type="text" id="name" required />
              </section>
              <section class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" required />
              </section>
            </section>
            <section class="form-fields-group">
              <section class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password" required />
              </section>
              <section class="form-group">
                <label for="Confirm Password">Confirm Password</label>
                <input
                  type="password"
                  name="confirm_password"
                  id="confirmPassword"
                  required
                />
              </section>
            </section>
            <section class="form-group">
              <button class="btn btn--primary btn--w-100" type="submit">
                Register
              </button>
            </section>
          </form>
        </section>
      </section>
`;

  modal.innerHTML = modalContent;
  toggleModal();
}
