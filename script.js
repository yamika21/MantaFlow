document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData();
  formData.append("username", document.getElementById("username").value);
  formData.append("password", document.getElementById("password").value);

  fetch("backend/login.php", {
    method: "POST",
    body: formData,
  })
    .then(res => res.json())
    .then(data => {
      alert(data.message);
      if (data.status === "success") {
        window.location.href = "dashboard.html";
      }
    })
    .catch(err => console.error(err));
});
