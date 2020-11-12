// sticky navigation menu Section

let nav_offset_top = $(".navbar").height() + 10;

function navbarFixed() {
  if ($(".navbar").length) {
    $(window).scroll(function () {
      let scroll = $(window).scrollTop();
      if (scroll >= nav_offset_top) {
        $(".navbar").addClass("navbar_fixed");
      } else {
        $(".navbar").removeClass("navbar_fixed");
      }
    });
  }
}
navbarFixed();

// Start Active Link

$(document).ready(function () {
  var path = window.location.pathname.split("/").pop();

  if (path == "") {
    path = index.html;
  }

  var target = $('nav a[href="' + path + '"]');

  target.addClass("active").siblings().removeClass("active");
});

// Start Counter Section
const counters = document.querySelectorAll(".counter");
const speed = 2000;

counters.forEach((counter) => {
  const updCount = () => {
    const target = counter.getAttribute("data-target");
    const count = +counter.innerText;

    const score = target / speed;

    if (count < target) {
      counter.innerText = Math.ceil(count + score);
      setTimeout(updCount, 1);
    } else {
      counter.innerText = target;
    }
  };
  updCount();
});

// Start Portfolio Section

(function () {
  var $projects = $(".projects");

  $projects.isotope({
    itemSelector: ".item",
    layoutMode: "fitRows",
  });

  $("ul.filters > li").on("click", function (e) {
    e.preventDefault();

    var filter = $(this).attr("data-filter");

    $("ul.filters > li").removeClass("active");
    $(this).addClass("active");

    $projects.isotope({ filter: filter });
  });

  $(".card")
    .mouseenter(function () {
      $(this).find(".card-overlay").css({ top: "-100%" });
      $(this).find(".card-hover").css({ top: "0" });
    })
    .mouseleave(function () {
      $(this).find(".card-overlay").css({ top: "0" });
      $(this).find(".card-hover").css({ top: "100%" });
    });
})(jQuery);

//  AOS Animation
AOS.init();
