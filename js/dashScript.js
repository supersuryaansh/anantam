const mainMenuPageOpenBtn = document.querySelectorAll(".main--MenuBtn");
const mainMenuPageCloseBtn = document.querySelector(".menu--close-btn");
const mainMenuPage = document.querySelector(".main--menuPage");

function clearCookies() {
  // Split cookies by semicolon
  var cookies = document.cookie.split(";");

  // Loop through each cookie and set its expiration date in the past
  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i];
    var eqPos = cookie.indexOf("=");
    var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
  }

  // Optional: Reload the page to reflect the changes
  location.reload();
}

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
