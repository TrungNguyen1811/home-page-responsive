// Slide project
$(document).ready(function () {
  $(".projects__contents .projects__slider").each(function (index) {
    var isOdd = index % 2 !== 0;
    $(this)
      .find(".owl-carousel")
      .owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        rtl: isOdd,
        responsive: {
          0: {
            items: 1,
          },
          480: {
            items: 1,
          },
          768: {
            items: 2,
          },
        },
      });
  });
});

// Slide reviews
$(document).ready(function () {
  $(".reviews__content .review__slider").each(function (index) {
    $(this)
      .find(".owl-carousel")
      .owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
        },
      });
  });
});

// scroll header
const header = document.querySelector("header");
window.addEventListener("scroll", () => {
  if (window.scrollY > 500) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

// flow-work see more
document.querySelectorAll(".flow-work__item").forEach((item) => {
  const button = item.querySelector(".read-more");

  if (button) {
    button.addEventListener("click", (event) => {
      event.preventDefault();
      document
        .querySelectorAll(".flow-work__item")
        .forEach((i) => i.classList.remove("active"));
      item.classList.add("active");
    });
  }
});

// Slide text color
document.addEventListener("DOMContentLoaded", function () {
  const colors = [
    "var(--red)",
    "var(--yellow)",
    "var(--blue)",
    "var(--white)",
    "var(--black)",
  ];

  document.querySelectorAll(".project__desc").forEach((item) => {
    const randColor = colors[Math.floor(Math.random() * colors.length)];
    item.style.color = randColor;
    const button = item.querySelector(".btn-extend");
    if (button) {
      button.style.backgroundColor = randColor;
    }
  });
});

// slide image background
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".owl-carousel .projects__card").forEach((item) => {
    const image = item.querySelector("img");
    const backgroundElement = item.querySelector(".project__image--background");

    if (image && backgroundElement) {
      const imageUrl = image.getAttribute("src");
      backgroundElement.style.backgroundImage = `url('${imageUrl}')`;
    }
  });
});

// why-choose-us see more
document
  .querySelectorAll(".why-choose-us__items .why-choose-us__item")
  .forEach((item) => {
    const button = item.querySelector(".why-choose-us__header");

    if (button) {
      button.addEventListener("click", (e) => {
        document
          .querySelectorAll(".why-choose-us__items .why-choose-us__item")
          .forEach((item) => {
            item.classList.remove("active");
          });
        item.classList.add("active");
      });
    }
  });

// achievement background-color
$(document).ready(function () {
  var backgroundColor = [
    "var(--red)",
    "var(--yellow)",
    "var(--blue)",
    "var(--white)",
    "var(--black)",
  ];
  $(".achievements__content .achievements__image a").each(function () {
    var randomColor =
      backgroundColor[Math.floor(Math.random() * backgroundColor.length)];
    $(this).css("background-color", randomColor);
    $(this).data("originalColor", randomColor);
  });

  $(".achievements__content .achievements__image a").hover(
    function () {
      $(this).css("background-color", "rgba(255, 255, 255, 0.7)");
    },
    function () {
      $(this).css("background-color", $(this).data("originalColor"));
    }
  );
});

$(document).ready(function () {
  $(".blog__item").each(function () {
    const block = $(this).find(".wrap");

    block.hover(
      function () {
        const image = block.find(".blog__image--scales");
        $(image).css("transform", "scale(120%)");
        const link = block.find(".blog__desc a");
        $(link).css("color", "var(--blue)");
      },
      function () {
        const image = block.find(".blog__image--scales");
        $(image).css("transform", "none");
        const link = block.find(".blog__desc a");
        $(link).css("color", "inherit");
      }
    );
  });
});

// effect
$(document).ready(function () {
  function applyAnimation() {
    document
      .querySelectorAll(".achievements__content .image__item.visible")
      .forEach((item, index) => {
        item.style.animationDelay = `${index * 0.1}s`;
        item.style.transitionDelay = `${0.1 * index}s`;
        item.style.animationDuration = "1s";
        item.style.animationName = "fadeInUp";
        item.style.visibility = "visible";
        item.style.opacity = "1";
      });
    document
      .querySelectorAll(".packages__item.visible")
      .forEach((item, index) => {
        item.style.animationDelay = `${index * 0.1}s`;
        item.style.transitionDelay = `${0.1 * index}s`;
        item.style.animationDuration = "1s";
        item.style.animationName = "fadeInDown";
        item.style.visibility = "visible";
        item.style.opacity = "1";
      });
    document.querySelectorAll(".blog__item.visible").forEach((item, index) => {
      item.style.animationDelay = `${0.5 + index * 0.1}s`;
      item.style.transitionDelay = `${0.5 + index * 0.1}s`;
      item.style.animationDuration = "1s";
      item.style.animationName = "fadeInDown";
      item.style.visibility = "visible";
      item.style.opacity = "1";
    });
    document
      .querySelectorAll(".packages__shapes .shape.visible")
      .forEach((item, index) => {
        item.style.animationDelay = `${0.5 + index * 0.1}s`;
        item.style.transitionDelay = `${0.5 + index * 0.1}s`;
        item.style.visibility = "visible";
        item.style.opacity = "1";
      });
  }

  function checkVisibility() {
    $(
      ".header__title, .work-card, .flow-work__items > .flow-work__item, .flow-work__background, .projects__slider .owl-stage .owl-item, .review__slider .owl-stage .owl-item,.why-choose-us__icon, .why-choose-us__items, .why-choose-us__item, .achievements__statistic, .achievements__content .image__item, .achievements__read-more, .packages__item, .contact__form, .contact__info,.blog__item,.packages__shapes .shape"
    ).each(function () {
      const elementTop = $(this).offset().top;
      const windowHeight = $(window).height();
      const windowScrollTop = $(window).scrollTop();

      if (
        elementTop < windowScrollTop + windowHeight &&
        !$(this).hasClass("visible")
      ) {
        $(this).addClass("visible");
      }
    });
    applyAnimation();
  }

  $(window).on("scroll", function () {
    checkVisibility();
  });

  checkVisibility();
});

// btn nav in mobile
const btnSubMenus = document.querySelectorAll(".btn-sub-menu");
const styleSheet = document.head.appendChild(
  document.createElement("style")
).sheet;

btnSubMenus.forEach((btn) => {
  btn.addEventListener("click", () => {
    const item = btn.closest(".nav-item");
    const id = item.id;
    const subMenu = item.querySelector(".sub-menu");
    const ruleIndex = Array.from(styleSheet.cssRules).findIndex(
      (rule) => rule.selectorText === `#${id} .btn-sub-menu::after`
    );

    if (subMenu.classList.contains("open")) {
      subMenu.classList.remove("open");
      btn.classList.remove("sub-menu-opened");

      if (ruleIndex !== -1) {
        styleSheet.deleteRule(ruleIndex);
      }
      styleSheet.insertRule(
        `#${id} .btn-sub-menu::after { display: block; }`,
        styleSheet.cssRules.length
      );
    } else {
      subMenu.classList.add("open");
      btn.classList.add("sub-menu-opened");

      if (ruleIndex !== -1) {
        styleSheet.deleteRule(ruleIndex);
      }
      styleSheet.insertRule(
        `#${id} .btn-sub-menu::after { display: none; }`,
        styleSheet.cssRules.length
      );
    }
  });
});

const overlay = document.querySelector("#overlay");
const navMobile = document.querySelector(".nav-mobile");
const btnNavbar = document.querySelector(".header__action");

if (overlay && btnNavbar) {
  btnNavbar.addEventListener("click", () => {
    navMobile.classList.add("active");
    overlay.style.display = "block";
    setTimeout(() => {
      overlay.style.opacity = "0.7";
    }, 0);
  });
  overlay.addEventListener("click", () => {
    navMobile.classList.remove("active");
    overlay.style.opacity = "0";
    overlay.addEventListener(
      "transitionend",
      () => {
        overlay.style.display = "none";
      },
      { once: true }
    );
  });
}

// nav current page
$document.ready(function () {
  const pathname = window.location.pathname;

  const pathPart = pathname.split("/");

  const projectParam = pathPart[pathPart.length - 1];
  switch (projectParam) {
    case "project":
      const item = item.querySelector(".header__navbar .navbar-item-1");
      item.classList.add("current-page");
  }
});
