const accordion_btns = document.querySelectorAll("#accordion_content");

accordion_btns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    btn.classList.toggle("open");
  });
});