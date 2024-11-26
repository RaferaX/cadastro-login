// Seleciona o ícone do olho e o campo de senha
const eyeIcon = document.getElementById("eye");
const passwordField = document.getElementById("password");

// Adiciona um evento de clique ao ícone do olho
eyeIcon.addEventListener("click", () => {
  // Verifica o tipo do campo de senha e alterna entre "password" e "text"
  if (passwordField.type === "password") {
    passwordField.type = "text"; // Torna a senha visível
    eyeIcon.classList.remove("fa-eye"); // Muda o ícone para "fa-eye-slash"
    eyeIcon.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password"; // Torna a senha invisível
    eyeIcon.classList.remove("fa-eye-slash"); // Muda o ícone para "fa-eye"
    eyeIcon.classList.add("fa-eye");
  }
});
