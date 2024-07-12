// Show Form Function
function showForm() {
  const modalContent = `
      <section class="modal_content">
        <section class="modal_header">
          <h3 class="modal_title">Upload Examination Paper</h3>
          <button onclick="toggleModal()" class="btn btn--small btn--primary">
            Close
          </button>
        </section>
        <section class="modal_body">
          <form method="post">
            <section class="form-fields-group">
              <section class="form-group">
                <label for="Course Code">Course Code</label>
                <input
                  type="text"
                  name="course_code"
                  id="courseCode"
                  required
                />
              </section>
              <section class="form-group">
                <label for="Course Title">Course Title</label>
                <input
                  type="text"
                  name="course_title"
                  id="courseTitle"
                  required
                />
              </section>
            </section>
            <section class="form-fields-group">
              <section class="form-group form-group-w-75">
                <label for="Exam Title">Exam Title</label>
                <input type="text" name="exam_title" id="examTitle" required />
              </section>
              <section class="form-group form-group-w-25">
                <label for="Exam Date">Exam Date</label>
                <input
                  type="text"
                  name="exam_title"
                  id="examTitle"
                  placeholder="e.g June 2024"
                  required
                />
              </section>
            </section>
            <section class="form-group">
              <input type="file" name="file" id="file" required />
            </section>
            <section class="form-group">
              <button class="btn btn--primary btn--w-100" type="submit">
                Upload
              </button>
            </section>
          </form>
        </section>
      </section>
`;

  modal.innerHTML = modalContent;
  toggleModal();
}
