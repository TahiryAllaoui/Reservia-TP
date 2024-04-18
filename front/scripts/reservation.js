let backButton = document.querySelector(".back");
let reserverButton = document.querySelector(".reserver");

backButton.addEventListener("click", () => {
  window.location.href = "/Reservia/front";
});

reserverButton.addEventListener("click", () => {
  console.log("popup");
});
