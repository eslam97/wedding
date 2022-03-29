// let img = document.querySelector(".start_home .img img");
// let images = ["img/2.jpg", "img/1.jpg"];
// setInterval(() => {
//   let randm = Math.floor(Math.random() * 2);
//   img.src = images[randm];
// }, 4000);
// typing
let texts = ["wedding party", "birthday party", "graduation party"];
let count = 0;
let index = 0;
let CurrentText = "";
let letter = "";
(function type() {
  if (count === texts.length) {
    count = 0;
  }
  CurrentText = texts[count];
  letter = CurrentText.slice(0, ++index);
  document.querySelector(".typing").textContent = letter;
  if (letter.length === CurrentText.length) {
    count++;
    index = 0;
  }
  setTimeout(type, 400);
})();

// slider commit code jquery
$(".slider").slick({
  dots: true,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});
