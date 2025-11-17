const hamburger_btn = document.querySelector("#hamburger_btn");

hamburger_btn.addEventListener("click", (e) => {
  const header = document.querySelector("#global-header");
  header.classList.toggle("open");
  
});