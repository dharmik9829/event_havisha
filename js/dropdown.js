$(document).ready(function () {
  $("#servicesDropdownMenu").hover(function () {
    console.log("dharmik");
    $(".dropdown").css("display", "inline-block");
  });

  $(".dropdown").mouseout(function (event) {
    console.log(event.target);
    // console.log("dharmik");
    $(".dropdown").css("display", "none");
  });
});
