const btn = document.getElementById("popup-btn");
const section = document.querySelector(".shiinomien");
const img = document.getElementById("dairylist");

btn.addEventListener("click", (e) => {
    e.stopPropagation();
    section.classList.add("show");
});

img.addEventListener("click", (e) => {
    e.stopPropagation();
});

document.addEventListener("click", () => {
    section.classList.remove("show");
});