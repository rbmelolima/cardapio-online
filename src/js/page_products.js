//Modal
function openImage(src, caption) {
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");

  modal.style.display = "block";
  modalImg.src = src;
  captionText.innerHTML = caption;

  var span = document.getElementsByClassName("close")[0];

  span.onclick = function () {
    modal.style.display = "none";
  }
}

//Snackbar
async function toggleSnackbar(nameProduct) {
  const seconds = 4 * 1000;
  const snackbar = document.getElementById("snackbar");

  if(snackbar.classList.contains('invisible')) {
    snackbar.innerHTML = '';
    if(nameProduct !== null && nameProduct !== '' && nameProduct !== undefined) {
      snackbar.append(`${ nameProduct } foi adicionado(a) ao carrinho`);
    } else {
      snackbar.append(`O produto foi adicionado ao carrinho`);
    }
    snackbar.classList.remove('invisible');
    setTimeout(function () {
      snackbar.classList.add('invisible');
    }, seconds);
  } else {
    snackbar.classList.add('invisible');
    toggleSnackbar(nameProduct);
  }
}

// Swiper
const swiper = new Swiper('.categories-products-sticky .swiper-container', {
  direction: 'horizontal',
  slidesPerView: 'auto',
  spaceBetween: 32
});

// Âncoras
document.addEventListener('DOMContentLoaded', function () {
  const sections = document.querySelectorAll(".section-products");
  const menu_links = document.querySelectorAll(".swiper-slide a");
  const makeActive = (link) => menu_links[link].classList.add("active");
  const removeActive = (link) => menu_links[link].classList.remove("active");
  const removeAllActive = () => [...Array(sections.length).keys()].forEach((link) => removeActive(link));
  const sectionMargin = 100;
  let currentActive = 0;

  window.addEventListener("scroll", () => {
    const current = sections.length - [...sections].reverse().findIndex((section) => window.scrollY >= section.offsetTop - sectionMargin) - 1
    if(current !== currentActive) {
      removeAllActive();
      currentActive = current;
      makeActive(current);
    }
  });
}, false);