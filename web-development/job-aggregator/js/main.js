function show_filter() {
  document.getElementById("filter_options").classList.add("d-block");
  document.getElementById("plus").classList.remove("d-inline-block");
  document.getElementById("minus").classList.add("d-inline-block");
}

function hide_filter() {
  document.getElementById("filter_options").classList.remove("d-block");
  document.getElementById("plus").classList.add("d-inline-block");
  document.getElementById("minus").classList.remove("d-inline-block");
}

// Smooth Scroll
var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 2000
});

var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {
  easing: "easeInOutQuad"
});
