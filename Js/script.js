const UserLoginBtn = document.querySelector(".js-log-menu-btn");
const loginMenu = document.querySelector(".js-login-menu");

UserLoginBtn.addEventListener("click", () => {
    if(loginMenu.classList.contains("display-off")){
        loginMenu.classList.remove("display-off");
    }
    else {
        loginMenu.classList.add("display-off");
    }
});
