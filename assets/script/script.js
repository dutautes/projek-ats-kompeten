const body = document.getElementById("bodyPage");
const checkbox = document.getElementById("checkbox");
const tema = document.querySelector(".ket-tema");
const mainContainer = document.querySelector(".main-container");
const containerLeft = document.querySelector(".container-left");
const footer = document.querySelector("footer");

checkbox.addEventListener("change", () => {
    if (checkbox.checked) { 
        body.style.background = "#000016";
        mainContainer.style.background = "linear-gradient(to right, #2C3E50 50%, #BDC3C7 50%)"; 
        containerLeft.style.color = "white";
        footer.style.color = "white";
        tema.style.color = "white";
    } else { 
        body.style.background = "#fff";
        mainContainer.style.background = "linear-gradient(to right, #FFFACD 50%, white 50%)";
        containerLeft.style.color = "black";
        footer.style.color = "black";
        tema.style.color = "black";
    }
});
