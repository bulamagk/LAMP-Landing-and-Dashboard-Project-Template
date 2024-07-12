const loginForm = document.querySelector("form");

// Handle login form submission
loginForm.onsubmit = async function (event) {
  event.preventDefault();

  const formData = new FormData(event.target);
  const data = Object.fromEntries(formData);

  login(data);
};

// Handle login
async function login(data) {
  setNotification("Login successfully!", "success");
}
