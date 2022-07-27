$(document.body).on('added_to_cart removed_from_cart', function() {
  console.log("UPDATE");
});


$(document).ready(function() {

  $(document).scroll(function() {
    var height = $(document).height();
    if (height > 720) {
      var y = $(document).scrollTop(), //get page y value 
      header = $("#primary-nav"); // your div id
      height = header.height();
      main = $(".woocommerce-page main");
      hero = $("#hero");

      bar_height = $("#wpadminbar").height();
      if (bar_height == '') { bar_height = 0; }
      
      if (y >= height)  {
        main.css({"margin-top":"150px"});
        hero.css({"margin-top":"150px"});
        header.css({"position" : "fixed", "top" : '0px', "left" : "0", "width" : "100%", "z-index" : "9999"});
      } 
      else {
        main.css({"margin-top":"0px"});
        hero.css({"margin-top":"0px"});
        header.css("position", "static");
      }
    }
  });
})
