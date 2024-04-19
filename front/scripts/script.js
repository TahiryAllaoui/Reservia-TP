let body = document.querySelector("body");

let aHeberge = document.getElementById("anchor-heberge");
let heberge = document.getElementById("hebergement");
aHeberge.addEventListener("click", () => {
  heberge.scrollIntoView({ behavior: "smooth" });
});

// For search-bar, Menu on mobile
let nav = document.querySelector("nav");
let anchor = document.querySelector(".anchor");
let closeMenu = document.querySelector(".anchor .close-menu");
if (body.clientWidth < 435) {
  let svgs = document.createElement("div");
  let searchSvgs = document.createElement("div");
  let button = document.querySelector("button");
  svgs.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 2rem; padding: 0 1rem 0 0">
    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
    </svg>
    `;
  searchSvgs.innerHTML = `<svg style="width: 2rem; height: 2rem;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="413.52" height="330.816" viewBox="0 0 400 320">
    <image id="Calque_1" data-name="Calque 1" x="85" y="53" width="211" height="214" xlink:href="data:img/png;base64,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"/>
  </svg>`;
  nav.appendChild(svgs);
  anchor.style.left = "100%";
  svgs.children[0].addEventListener("click", () => {
    anchor.style.left = "30%";
    anchor.style.boxShadow = "0 0 15px 150px rgba(0,0,0,0.2)";
  });
  closeMenu.addEventListener("click", () => {
    anchor.style.left = "100%";
    anchor.style.boxShadow = "none";
  });
  button.textContent = "";
  button.appendChild(searchSvgs);
  anchor.children[0].addEventListener("click", () => {
    anchor.style.left = "100%";
    anchor.style.boxShadow = "none";
  });
  anchor.children[1].addEventListener("click", () => {
    anchor.style.left = "100%";
    anchor.style.boxShadow = "none";
  });
}

// for pop-up
let inscripsButton = document.querySelector("#inscrips");
let inscripsPopUp = document.querySelector("#inscrips-pop-up");
let addingForm = document.getElementById("adding-from");
let crossButtonForInscrips = document.querySelector("#cross");

inscripsButton.addEventListener("click", () => {
  inscripsPopUp.style.opacity = "1";
  inscripsPopUp.style.zIndex = "1";
  inscripsPopUp.style.display = "flex";
  inscripsPopUp.style.animation = "fadeIn 200ms";
  anchor.style.left = "100%";
  anchor.style.boxShadow = "none";
  console.log("anchor out");
});
crossButtonForInscrips.addEventListener("click", () => {
  inscripsPopUp.style.animation = "fadeOut 200ms";
  inscripsPopUp.style.zIndex = "-1";
  inscripsPopUp.style.display = "none";
});
addingForm.addEventListener("submit", (e) => {
  inscripsButton.style.zIndex = "-1";
  inscripsButton.style.display = "none";
  inscripsButton.style.animation = "fadeOut 200ms";
});
