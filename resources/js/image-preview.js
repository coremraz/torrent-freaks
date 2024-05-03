const screenshots = document.querySelectorAll('.screenshot');
const gameScreenshots = document.querySelector('.game-screenshots');

screenshots.forEach(screenshot => {
    screenshot.addEventListener('click', handleScreenshotClick);
});

function handleScreenshotClick(event) {
    const clickedScreenshot = event.target;
    const screenshotUrl = clickedScreenshot.src;
    const overlay = document.createElement('div');
    const enlargedImage = document.createElement('img');

    overlay.classList.add('overlay');
    enlargedImage.classList.add('enlarged-image');
    enlargedImage.src = screenshotUrl;

    overlay.appendChild(enlargedImage);
    gameScreenshots.appendChild(overlay);

    overlay.addEventListener('click', handleOverlayClick);

    function handleOverlayClick() {
        overlay.remove();
    }
}
