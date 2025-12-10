let currentSlide = 0;
let isPlaying = true;
let intervalId;

const slides = document.querySelectorAll('.slide');
const dots = document.getElementById('dotsContainer');

// ドットを生成
slides.forEach((_, i) => {
    const dot = document.createElement('div');
    dot.className = i === 0 ? 'dot active' : 'dot';
    dot.onclick = () => goToSlide(i);
    dots.appendChild(dot);
});

const dotElements = dots.querySelectorAll('.dot');

function showSlide(n) {
    slides[currentSlide].classList.remove('active');
    dotElements[currentSlide].classList.remove('active');
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
    dotElements[currentSlide].classList.add('active');
}

function goToSlide(n) {
    showSlide(n);
    if (isPlaying) {
        clearInterval(intervalId);
        intervalId = setInterval(() => showSlide(currentSlide + 1), 3000);
    }
}

document.getElementById('prevBtn').onclick = () => goToSlide(currentSlide - 1);
document.getElementById('nextBtn').onclick = () => goToSlide(currentSlide + 1);
document.getElementById('playPauseBtn').onclick = () => {
    isPlaying = !isPlaying;
    isPlaying ? intervalId = setInterval(() => showSlide(currentSlide + 1), 3000) : clearInterval(intervalId);
    document.getElementById('playPauseBtn').textContent = isPlaying ? '停止' : '再生';
};

intervalId = setInterval(() => showSlide(currentSlide + 1), 3000);