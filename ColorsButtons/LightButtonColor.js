const buttonLight = document.getElementById("light");

buttonLight.addEventListener("click", () => {

    document.body.style.background = "#ccc";
    document.body.style.color = "#202020";
    buttonLight.style.border = "none";
    document.body.style.borderRadius = "10px";
    buttonLight.style.borderRadius = "5px";
    buttonLight.style.color = "#fff";
    buttonLight.style.background = "#202020";

})