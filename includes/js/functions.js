function togglePassword() {
    const passwordInput = document.querySelector(".password");
    const toggleButton = document.querySelector(".toggleButton");
    const rePassword = document.querySelector(".re_password");
    if (passwordInput.type == "password") {
        passwordInput.type = "text";
        if (rePassword) { rePassword.type = "text"; }
        toggleButton.textContent = "Ocultar";
    } else {
        passwordInput.type = "password";
        if (rePassword) { rePassword.type = "password"; }
        toggleButton.textContent = "Mostrar";
    }
};

function popup(url, username) {
    if (confirm("¿Estás seguro de borrar al usuario '" + username + "'?")) {
        window.location.href = url;
    }
}