<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exam Paper Repository System</title>
    <link
      rel="shortcut icon"
      href="./assets/img/logo.jpeg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <main class="hero">
      <section class="login-form">
        <section class="login-container container">
          <h1>
            <span>Examination Paper</span> <br />
            Repository System
          </h1>
          <p>Login to access pass examinations questions papers</p>

          <form method="post" id="login">
            <section class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" required />
            </section>
            <section class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" required />
            </section>
            <section class="form-group">
              <button class="btn btn--primary btn--w-100" type="submit">
                Login
              </button>
            </section>
          </form>
          <p class="footer">
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            Examination Paper Repository System
          </p>
        </section>
      </section>
    </main>
    <!-- Notification -->
    <section id="notification" class="alert"></section>
    <!-- End Notification -->

    <script src="./assets/js/notification.js"></script>
    <script src="./assets/js/login.js"></script>
    <script src="./assets/vendors/fontawesome-free-6.4.2-web/js/all.js"></script>
  </body>
</html>
