const swiper = new Swiper('.categories-products-sticky .swiper-container', {
  direction: 'horizontal',
  slidesPerView: 'auto',
  spaceBetween: 32
});

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