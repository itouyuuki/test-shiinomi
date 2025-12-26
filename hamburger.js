const hamburger_btn = document.querySelector("#hamburger_btn");
const header = document.querySelector("#global-header");

hamburger_btn.addEventListener("click", (e) => {
  header.classList.toggle("open");
  
});