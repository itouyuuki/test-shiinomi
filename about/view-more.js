const view_btn = document.getElementById("view-more");

view_btn.addEventListener("click", (e) => {
    const section = document.getElementById("ayumi");
    section.classList.toggle("open");
    
    view_btn.textContent = section.classList.contains("open") ? "閉じる" : "もっと見る";

    if(!section.classList.contains("open")){    
        section.scrollIntoView();
    };
});