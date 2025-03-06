const body = document.getElementById("bodyPage"); // body
const checkbox = document.getElementById("checkbox"); // toggle 
const tema = document.querySelector(".ket-tema"); // ket "change theme"
const mainContainer = document.querySelector(".main-container"); // perubahan bg pada mc
const footer = document.querySelector("footer"); // footer

checkbox.addEventListener("change", () => {
    if (checkbox.checked) { 
        body.style.background = "#000016";
        mainContainer.style.background = "linear-gradient(to right, #2C3E50 50%, #BDC3C7 50%)"; 
        footer.style.color = "white";
        tema.style.color = "white";
    } else { 
        body.style.background = "#fff";
        mainContainer.style.background = "linear-gradient(to right, rgb(77, 146, 169) 50%, white 50%)";
        footer.style.color = "black";
        tema.style.color = "black";
    }
});
