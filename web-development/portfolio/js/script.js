$(document).ready(function() {
  var pathname = window.location.pathname;
  var split = pathname.split("/");
  var page = split[split.length - 1];
  var path = page.split(".");

  if (path[0]) {
    $("html, body").animate({ scrollTop: $("." + path[0]).offset().top }, 900);
  }

  //   if (path[0]) {
  //     document.getElementById(path[0]).scrollIntoView(true);
  //   }
});
