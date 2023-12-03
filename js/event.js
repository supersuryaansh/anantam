const mainMenuPageOpenBtn = document.querySelectorAll(".main--MenuBtn");
const mainMenuPageCloseBtn = document.querySelector(".menu--close-btn");
const mainMenuPage = document.querySelector(".main--menuPage");

const listArea = document.querySelector("#description");
const list = document.querySelectorAll(".description--list");
const imgList = document.querySelectorAll(".empty--img");

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

function mouseEnterImgHover() {
  list.forEach((e) => {
    e.addEventListener("mouseenter", function (event) {
      var dataNumber = event.target.getAttribute("data-number");
      if (dataNumber === "01") {
        document.getElementById("img1").style.transform = "translateX(0%)";
      } else if (dataNumber === "02") {
        document.getElementById("img2").style.transform = "translateX(0%)";
      } else if (dataNumber === "03") {
        document.getElementById("img3").style.transform = "translateX(0%)";
      } else if (dataNumber === "04") {
        document.getElementById("img4").style.transform = "translateX(0%)";
      } else if (dataNumber === "05") {
        document.getElementById("img5").style.transform = "translateX(0%)";
      } else if (dataNumber === "06") {
        document.getElementById("img6").style.transform = "translateX(0%)";
      } else if (dataNumber === "07") {
        document.getElementById("img7").style.transform = "translateX(0%)";
      } else if (dataNumber === "08") {
        document.getElementById("img8").style.transform = "translateX(0%)";
      } else if (dataNumber === "09") {
        document.getElementById("img9").style.transform = "translateX(0%)";
      } else if (dataNumber === "10") {
        document.getElementById("img10").style.transform = "translateX(0%)";
      }
    });

    e.addEventListener("mouseleave", function (event) {
      var dataNumber = event.target.getAttribute("data-number");
      if (dataNumber === "01") {
        document.getElementById("img1").style.transform = "translateX(-120%)";
      } else if (dataNumber === "02") {
        document.getElementById("img2").style.transform = "translateX(-120%)";
      } else if (dataNumber === "03") {
        document.getElementById("img3").style.transform = "translateX(-120%)";
      } else if (dataNumber === "04") {
        document.getElementById("img4").style.transform = "translateX(-120%)";
      } else if (dataNumber === "05") {
        document.getElementById("img5").style.transform = "translateX(-120%)";
      } else if (dataNumber === "06") {
        document.getElementById("img6").style.transform = "translateX(-120%)";
      } else if (dataNumber === "07") {
        document.getElementById("img7").style.transform = "translateX(-120%)";
      } else if (dataNumber === "08") {
        document.getElementById("img8").style.transform = "translateX(-120%)";
      } else if (dataNumber === "09") {
        document.getElementById("img9").style.transform = "translateX(-120%)";
      } else if (dataNumber === "10") {
        document.getElementById("img10").style.transform = "translateX(-120%)";
      }
    });
  });
}
mouseEnterImgHover();
