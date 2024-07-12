const notificationContainer = document.querySelector("#notification");

function setNotification(message, type, milisecs = 3000) {
  const icon = type == "error" ? "times" : "check";
  const notificationClass = type == "error" ? "alert--error" : "alert--success";

  notificationContainer.innerHTML = `
        <i class="fas fa-${icon}-circle fa-2x"></i>
        <p>${message}</p>
    `;

  notificationContainer.classList.add(notificationClass);
  notificationContainer.classList.add("show");

  setTimeout(() => notificationContainer.classList.toggle("show"), milisecs);
}
