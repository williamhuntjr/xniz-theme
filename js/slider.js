(function($) {

  function Slider() {
    this.current = 1;
    this.max = $('.slide').length;
    this.interval;

    this.slide_name = '#slider .slide-' + this.current;
  
    this.init = function() {
      $(this.slide_name).show("slide", { direction: "left" }, 1000);
    }

    this.next = function() {
      var sl = this;

      if (sl.current == sl.max) { sl.current = 0; }
      sl.current++;

      if (slider_options.transition_type == 'fade') {
        $(this.slide_name).fadeOut("slow", function () {
          $(this).css('display', 'none');
          
          sl.slide_name = '#slider .slide-' + sl.current;
          $(sl.slide_name).fadeIn("slow")
        });
      }
      else { 
        $(this.slide_name).hide("slide", { direction: "left" }, 1000, function () {
          $(this).css('display', 'none');
          
          sl.slide_name = '#slider .slide-' + sl.current;
          $(sl.slide_name).show("slide", { direction: "right" }, 1000)
        });
      }
    }

    this.back = function() {
      var sl = this;

      if (sl.current == 1) { sl.current = sl.max; }
      else { --sl.current }
      
      if (slider_options.transition_type == 'fade') {
        $(this.slide_name).fadeOut("slow", function () {
          $(this).css('display', 'none');
          
          sl.slide_name = '#slider .slide-' + sl.current;
          $(sl.slide_name).fadeIn("slow")
        });
      }
      else { 
        $(this.slide_name).hide("slide", { direction: "left" }, 1000, function () {
          $(this).css('display', 'none');
          
          sl.slide_name = '#slider .slide-' + sl.current;
          $(sl.slide_name).show("slide", { direction: "right" }, 1000)
        });
      }
    }

  }

  $( document ).ready(function() {
    var slider = new Slider();
    slider.init();
    slider.interval = setInterval(function() { slider.next() }, slider_options.transition_speed)

    $('#slider .control.right').click(function() {
      clearInterval(slider.interval);
      slider.interval = setInterval(function() { slider.next() }, slider_options.transition_speed)
      slider.next();
    })
    $('#slider .control.left').click(function() {
      clearInterval(slider.interval);
      slider.interval = setInterval(function() { slider.next() }, slider_options.transition_speed)
      slider.back();
    })

  });
}(jQuery));