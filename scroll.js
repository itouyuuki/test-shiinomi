const prevBtn = document.querySelectorAll(".arrow-btn.prev");
const nextBtn = document.querySelectorAll(".arrow-btn.next");
const ul = document.querySelectorAll(".wp-contents-list");

prevBtn.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        if (ul[index]) {
            ul[index].scrollBy(-140,0);
        }
    });
});

nextBtn.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        if (ul[index]) {
            ul[index].scrollBy(140,0);
        }
    });
});