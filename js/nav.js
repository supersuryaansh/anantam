const mainMenuPageOpenBtn = document.querySelectorAll(".main--MenuBtn");
const mainMenuPageCloseBtn = document.querySelector(".menu--close-btn");
const mainMenuPage= document.querySelector(".main--menuPage");

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