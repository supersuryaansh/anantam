const mainMenuPageOpenBtn = document.querySelector(".nav--btn");
const mainMenuPageCloseBtn = document.querySelector(".menu--close-btn");
const mainMenuPage = document.querySelector(".main--menuPage");

function mainMenu() {
  mainMenuPageOpenBtn.addEventListener("click", function (e) {
      e.preventDefault();
      mainMenuPage.style.transform = `translateY(0%)`;
    });
  mainMenuPageCloseBtn.addEventListener("click", function (e) {
    e.preventDefault();
    mainMenuPage.style.transform = `translateY(-130%)`;
  });
}
mainMenu();

const userPass = document.querySelector("#usrPass");
const userConfirmPass = document.querySelector("#usrConfPass");
const formSubmit = document.querySelector("#Form");
function checkPassword(){
    if(userPass.value === userConfirmPass.value)
        return true;
    else
        alert("You entered wrong password");
    return false;
}

formSubmit.addEventListener('click', function (e){
    if(!checkPassword()){
        e.preventDefault();
    }
});