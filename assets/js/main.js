$(document).ready(function() {
  //Parallax Effect

  $(function() {
    //Cache the window object
    var $window = $(window);

    //Parallax background effect
    $('section[data-type="background"]').each(function() {
      var $bgobj = $(this); //assigning the object

      $window.scroll(function() {
        // scroll the background at var speed
        // the yPos is a negative because we're scrolling it UP!

        var yPos = -($window.scrollTop() / $bgobj.data("speed"));

        // Put together our final background position
        var coords = "50% " + yPos + "px";

        // Move the background
        $bgobj.css({ backgroundPosition: coords });
      }); // end window scroll
    });
  });

  // Scrollspy

  //Store navbar height for offset calculation
  var navOffset = $("#myNavbar").height();

  // Add scrollspy to <body>
  $("body").scrollspy({ target: ".navbar", offset: 200 });

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on("click", function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      // event.preventDefault();

      // Store hash
      var target = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $("html, body").animate(
        {
          scrollTop: $(target).offset().top - navOffset
        },
        800,
        function() {
          // Add hash (#) to URL when done scrolling (default click behavior)
          return window.history.pushState(null, null, target);
          // window.location.hash = target;
        }
      );
      return false;
    } // End if
  });

  // Testimonial Resize Height fix

  function carouselNormalization() {
    var items = $("#testimonial .item"), //grab all slides
      heights = [], //create empty array to store height values
      tallest; //create variable to make note of the tallest slide

    if (items.length) {
      function normalizeHeights() {
        items.each(function() {
          //add heights to array
          heights.push($(this).height());
        });
        tallest = Math.max.apply(null, heights); //cache largest value
        items.each(function() {
          $(this).css("min-height", tallest + "px");
        });
      }
      normalizeHeights();

      $(window).on("resize orientationchange", function() {
        (tallest = 0), (heights.length = 0); //reset vars
        items.each(function() {
          $(this).css("min-height", "0"); //reset min-height
        });
        normalizeHeights(); //run it again
      });
    }
  }
  carouselNormalization();

  var currentURL = $(location).attr("href");
});
