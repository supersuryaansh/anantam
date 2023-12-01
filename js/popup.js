// ANANT HACK POP
function anantPOP() {
  const modelWindow = document.querySelector("#modelWindowAnant");
  const anantPopBtn = document.querySelector("#anant--pop-btn");
  const popCloseBtn = document.querySelector("#anant--close-btn");

  anantPopBtn.addEventListener("click", function (e) {
    e.preventDefault();
    modelWindow.style.display = `flex`;
    modelWindow.style.opacity = 1;
  });
  popCloseBtn.addEventListener("click", function (e) {
    e.preventDefault();
    modelWindow.style.display = `none`;
    modelWindow.style.opacity = 0;
  });
}
anantPOP();

// ROBO POP
function roboPOP() {
  const modelWindow = document.querySelector("#modelWindowRobo");
  const roboPopBtn = document.querySelector("#robo--pop-btn");
  const popCloseBtn = document.querySelector("#robo--close-btn");

  roboPopBtn.addEventListener("click", function (e) {
    e.preventDefault();
    console.log("clickedddd");
    modelWindow.style.display = `flex`;
    modelWindow.style.opacity = 1;
  });
  popCloseBtn.addEventListener("click", function (e) {
    e.preventDefault();
    modelWindow.style.display = `none`;
    modelWindow.style.opacity = 0;
  });
}
roboPOP();

// CRUNCH POP
function crunchPop() {
  const modelWindow = document.querySelector("#modelWindowCrunch");
  const roboPopBtn = document.querySelector("#crunch--pop-btn");
  const popCloseBtn = document.querySelector("#crunch--close-btn");

  roboPopBtn.addEventListener("click", function (e) {
    e.preventDefault();
    console.log("clickedddd");
    modelWindow.style.display = `flex`;
    modelWindow.style.opacity = 1;
  });
  popCloseBtn.addEventListener("click", function (e) {
    e.preventDefault();
    modelWindow.style.display = `none`;
    modelWindow.style.opacity = 0;
  });
}
crunchPop();
