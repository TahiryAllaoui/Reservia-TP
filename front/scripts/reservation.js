let backButton = document.querySelector(".back");
let reserverButton = document.querySelector(".reserver");
let reservePopUp = document.querySelector("#reserve-pop-up");
let annuler = document.querySelector(".add-button");
backButton.addEventListener("click", () => {
  window.location.href = "/Reservia/front";
});

reserverButton.addEventListener("click", () => {
  reservePopUp.style.opacity = "1";
  reservePopUp.style.zIndex = "1";
  reservePopUp.style.display = "flex";
  reservePopUp.style.animation = "fadeIn 200ms";
});

annuler.addEventListener("click", () => {
  reservePopUp.style.animation = "fadeOut 200ms";
  reservePopUp.style.zIndex = "-1";
  reservePopUp.style.display = "none";
});
