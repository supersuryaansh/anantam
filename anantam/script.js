// Global Decelaration
const video = document.querySelector(".main--anantam-video");
const muteButton = document.querySelector(".mic--btn");
// main--menu
const mainMenuPageOpenBtn = document.querySelectorAll(".main--MenuBtn");
const mainMenuPageCloseBtn = document.querySelector(".menu--close-btn");
const mainMenuPage = document.querySelector(".main--menuPage");

function time() {
  const targetDate = new Date("2024-01-08T00:00:00Z").getTime();

  // Update the countdown every second
  const countdownInterval = setInterval(updateCountdown, 1000);

  function updateCountdown() {
    // Get the current date and time
    const now = new Date().getTime();

    // Calculate the remaining time
    const remainingTime = targetDate - now;

    // Calculate days, hours, and minutes
    const days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor(
      (remainingTime % (1000 * 60 * 60)) / (1000 * 60)
    );
    const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

    const padWithZero = (num) => (num < 10 ? `0${num}` : num);
    // Update the HTML with the remaining time
    document.getElementById("days").textContent = `${padWithZero(days)}:`;
    document.getElementById("hours").textContent = `${padWithZero(hours)}:`;
    document.getElementById("minutes").textContent = `${padWithZero(minutes)}:`;
    document.getElementById("seconds").textContent = `${padWithZero(seconds)}`;

    // Check if the countdown has reached zero
    if (remainingTime <= 0) {
      clearInterval(countdownInterval); // Stop the countdown
      document.getElementById("days").textContent = "EXPIRED";
      document.getElementById("hours").textContent = "";
      document.getElementById("minutes").textContent = "";
      document.getElementById("seconds").textContent = "";
    }
  }
}
time();

function toggleMute() {
  muteButton.addEventListener("click", function (e) {
    e.preventDefault();
    video.muted = !video.muted;
    muteButton.innerHTML = video.muted ? "UNMUTE" : "MUTE";
  });
}
toggleMute();

function mainMenu() {
  mainMenuPageOpenBtn.forEach((elem) => {
    elem.addEventListener("click", function (e) {
      e.preventDefault();
      mainMenuPage.style.transform = `translateY(0%)`;
    });
  });
  mainMenuPageCloseBtn.addEventListener("click", function (e) {
    e.preventDefault();
    mainMenuPage.style.transform = `translateY(-130%)`;
  });
}
mainMenu();