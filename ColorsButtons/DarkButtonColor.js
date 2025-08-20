const buttonDark = document.getElementById("dark");

function getDarkMode() {
    document.body.style.background = "#101010";
    document.body.style.color = "#fff";
    buttonDark.style.border = "none";
    buttonDark.style.borderRadius = "5px";
    buttonDark.style.color = "#202020";
    buttonDark.style.background = "#fff";


}

buttonDark.addEventListener("click", getDarkMode);