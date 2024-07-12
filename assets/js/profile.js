// Show Form Function
function showForm() {
  const modalContent = `
      <section class="modal_content">
        <section class="modal_header">
          <h3 class="modal_title">Update Profile</h3>
          <button onclick="toggleModal()" class="btn btn--small btn--primary">
            Close
          </button>
        </section>
        <section class="modal_body">
          <form method="post">
            <section class="form-fields-group">
              <section class="form-group">
                <label for="Matriculation Number">Matriculation Number</label>
                <input type="text" id="matricNo" readonly required />
              </section>
              <section class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" readonly required />
              </section>
            </section>
            <section class="form-group">
              <label for="Full Name">Full Name</label>
              <input type="text" name="name" id="name" required />
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
                Update
              </button>
            </section>
          </form>
        </section>
      </section>
`;

  modal.innerHTML = modalContent;
  toggleModal();
}
