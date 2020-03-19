$(document).ready(function() {
  $(".username").focusin("fast", function() {
    $(".image").fadeOut("fast", function() {
      $(this)
        .attr("src", "./images/no-smile.png")
        .fadeIn("fast");
    });

    var input = -1;

    $(this).keyup(function() {
      input++;
      console.log(input);
      if (input >= 5 && input <= 10) {
        // $(".image").fadeOut("fast", function() {
        $(".image")
          .attr("src", "./images/smiling.png")
          .fadeIn("fast");
        // });
      } else if (input >= 11 && input <= 15) {
        // $(".image").fadeOut("fast", function() {
        $(".image")
          .attr("src", "./images/more-smiling.png")
          .fadeIn("fast");
        // });
      }
    });

    $(this).each(function() {
      input++;
      console.log(input);
    });
  });
  $(".username").focusout(function() {
    $(".image").fadeOut("fast", function() {
      $(this)
        .attr("src", "./images/sleeping.png")
        .fadeIn("fast");
    });
  });

  $(".hands").hide();

  $(".password").focusin("fast", function() {
    $(".hands").fadeIn("fast", function() {
      $(".image").attr("src", "./images/more-smiling.png");
      // .fadeIn("fast");
      $(".hands").show();
    });
  });
  $(".password").focusout("fast", function() {
    $(".image").fadeOut("fast", function() {
      $(this)
        .attr("src", "./images/sleeping.png")
        .fadeIn("fast");
      $(".hands").hide();
    });
  });
});
