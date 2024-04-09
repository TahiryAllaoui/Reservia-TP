let aHeberge = document.getElementById("anchor-heberge");
aHeberge.addEventListener("click", () => {
  let heberge = document.getElementById("hebergement");
  console.log(heberge);
  heberge.scrollIntoView({ behavior: "smooth" });
});
