
const eyeIconToggleBtn = document.querySelector("#eyeIcon");
const inputTextToggle = document.querySelector(".openTxt");

eyeIconToggleBtn.addEventListener("click", eyeToggleFunction);

function eyeToggleFunction(){
    if(inputTextToggle.type === "password"){

        inputTextToggle.setAttribute("type", "text");
        inputTextToggle.classList.add("inputTextNew");
        document.querySelector('#eyeIcon').src = "images/eye-solid.svg";

    } else {
        inputTextToggle.setAttribute("type", "password");
        document.querySelector('#eyeIcon').src = "images/eye-slash-solid.svg";
    }

}