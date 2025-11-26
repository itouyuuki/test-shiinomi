const view_btn = document.querySelector("#view-more");

view_btn.addEventListener("click", (e) => {
    const dl = document.querySelector("#ayumi-list");
    dl.classList.toggle("open");
    
    view_btn.textContent = dl.classList.contains("open") ? "閉じる" : "もっと見る";

    if(!dl.classList.contains("open")){
        const ayumiTop = document.querySelector("#ayumi");

        ayumiTop.scrollIntoView();
    };
});
