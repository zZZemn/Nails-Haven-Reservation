const hover = document.querySelectorAll(".hover-me")
const bgprice = document.querySelectorAll(".bg-price")

hover.addEventListener('mouseenter', () => {
    if (!bgprice.classList.contains('hover')) {
      bgprice.classList.add('hover');
    }
  });

  hover.addEventListener('mouseleave', () => {
    if (bgprice.classList.contains('hover')) {
      bgprice.classList.remove('hover');
    }
  });