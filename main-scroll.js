const toTop = document.querySelector(".main-scroll");

window.addEventListener("scroll", () => {
    const scrollPage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;

    if (scrollPage >= 20) {
        toTop.textContent = "TOPへ戻る";
    } else {
        toTop.textContent = "本文を読む";
    }
});

// TOPへ戻るボタンのクリック時の処理
toTop.addEventListener("click", (e) => {
    if (toTop.textContent === "TOPへ戻る") {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
});