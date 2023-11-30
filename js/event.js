const menuOpenBtn = document.querySelector(".menu--btn");
const menuPage = document.querySelector(".menuPage");
const menuCloseBtn = document.querySelector(".menuCloseBtn");

function menu() {
  menuOpenBtn.addEventListener("click", function (e) {
    e.preventDefault();
    menuPage.style.transform = "translateX(0%)";
  });
  menuCloseBtn.addEventListener("click", function (e) {
    e.preventDefault();
    menuPage.style.transform = "translateX(120%)";
  });
}
menu();
