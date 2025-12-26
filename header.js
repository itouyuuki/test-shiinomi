const accordionBtns = document.querySelectorAll(".accordion_content");
let isOpenMenu = false;

accordionBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    const isOpen = btn.classList.contains("open");
    
    accordionBtns.forEach((b) => b.classList.remove("open"));
    
    if (!isOpen) {
      btn.classList.add("open");
    }
    isOpenMenu = !isOpen;
  });
});

window.addEventListener("resize", () => {
  if (isOpenMenu && window.matchMedia("(min-width: 768px)").matches) {
    accordionBtns.forEach((b) => b.classList.remove("open"));
    isOpenMenu = false;
  }
});