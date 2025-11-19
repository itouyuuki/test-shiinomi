const accordionBtns = document.querySelectorAll(".accordion_content");

accordionBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    const isOpen = btn.classList.contains("open");
    
    accordionBtns.forEach((b) => b.classList.remove("open"));
    
    if (!isOpen) {
      btn.classList.add("open");
    }
  });
});