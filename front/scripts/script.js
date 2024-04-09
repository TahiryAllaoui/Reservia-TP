let aHeberge = document.getElementById("anchor-heberge");
aHeberge.addEventListener("click", () => {
  let heberge = document.getElementById("hebergement");
  console.log(heberge);
  heberge.scrollIntoView({ behavior: "smooth" });
});

// For Menu on mobile
let nav = document.querySelector("nav");
let anchor = document.querySelector(".anchor");
let closeMenu = document.querySelector(".anchor .close-menu");
let body = document.querySelector("body");
if (body.clientWidth < 435) {
  let svgs = document.createElement("div");
  svgs.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 2rem; padding: 0 1rem 0 0">
    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
    </svg>
    `;
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
}
