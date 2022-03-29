let Mneu = document.querySelector(".header .nav_Menu");
let openMenu = document.querySelector(".header a.Menu");
let closeMenu = document.querySelector(".header a.close");
let AllLinksMenu = document.querySelectorAll(".header .link__Menu");
if (openMenu) {
  openMenu.addEventListener("click", () => {
    Mneu.classList.add("show_menu");
  });
}
if (closeMenu) {
  closeMenu.addEventListener("click", () => {
    Mneu.classList.remove("show_menu");
  });
}
AllLinksMenu.forEach((el) => {
  el.addEventListener("click", () => {
    Mneu.classList.remove("show_menu");
  });
});
// scrool top btn
let btnTop = document.querySelector(".btn_top");
window.onscroll = function () {
  if (window.scrollY >= 100) {
    btnTop.style.right = "20px";
  } else {
    btnTop.style.right = "-1000px";
  }
};
btnTop.onclick = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};
