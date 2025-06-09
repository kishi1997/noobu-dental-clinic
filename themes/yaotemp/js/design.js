// //#BTNクリックで#MENUを表示.disp {display: none;}
// $(function () {
//   $(".menuNavi").click(function () {
//     $("#menuNavi__menu").toggleClass("icon-close");
//     $(".mainNavi").toggleClass("menu-open");
//   });
// });

//Scroll Rules
$(function () {
  if (window.matchMedia("(max-width: 640px)").matches) {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 50;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  } else {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 100;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  }
});

//施工事例(サムネイル固定)
$(function () {
  $(".yao-slider").slick({
    arrows: false,
    fade: true,
    asNavFor: ".yao-thumbnail",
  });
  $(".yao-thumbnail").slick({
    slidesToShow: 6,
    asNavFor: ".yao-slider",
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
        },
      },
    ],
  });
});

//クリックしたら開閉
$(function () {
  $(".click-title").on("click", function () {
    $(this).next().slideToggle(400);
    $(this).toggleClass("close", 400);
  });
});

//　ヘッダーメニュー
var $navLists = $(".js-navLists");
var $navButtonWrapper = $(".js-nav");
var $navButton = $(".js-nav-menu");
// logo
var $logo = $(".menu_logo_wrapper img");
var $ctaTel = $(".menuNavi-wrapper .cta-tel");

function toggleMenu() {
  $navLists.toggleClass("is-active");
  $navButton.toggleClass("icon-close");
  $navButtonWrapper.removeClass("open");
  $logo.toggleClass("is-active");
  $ctaTel.toggleClass("is-active");
  toggleBodyScroll();
}

function toggleBodyScroll() {
  if ($navLists.hasClass("is-active")) {
    $("body").css({ height: "100%", overflow: "hidden" });
  } else {
    resetBodyScroll();
  }
}
function resetBodyScroll() {
  $("body").css({ height: "", overflow: "" });
}
function handleMenu() {
  $navButtonWrapper.off("click");
  $navButtonWrapper.click(toggleMenu);
}

$(window).resize(handleMenu);
handleMenu();

// headerの高さを計測して、bodyのpading-topにその値を追加
function adjustBodyPadding() {
  if (window.innerWidth <= 568) {
    const headerHeight = document.querySelector("header").offsetHeight;
    document.body.style.paddingTop = headerHeight + "px";
  } else {
    document.body.style.paddingTop = ""; // 568pxを超えた場合はpaddingをリセット
  }
}

window.addEventListener("resize", adjustBodyPadding);
window.addEventListener("load", adjustBodyPadding);
// アコーディオン
document.addEventListener("DOMContentLoaded", function () {
  const faqItems = document.querySelectorAll(".top_faq__item");

  faqItems.forEach(function (item) {
    const header = item.querySelector(".top_faq__item_header");
    const body = item.querySelector(".top_faq__item_body");
    const toggleText = header.querySelector(".screen-reader-text");
    const closeButton = item.querySelector(".top_faq__item_close_button"); // 新しい閉じるボタンを取得

    if (!header || !body) {
      return;
    }

    function closeAccordion() {
      item.classList.remove("is-open");
      header.setAttribute("aria-expanded", "false");
      if (toggleText) {
        toggleText.textContent = "開く"; // ヘッダーのSRテキストは「開く」に
      }
    }

    function openAccordion() {
      item.classList.add("is-open");
      header.setAttribute("aria-expanded", "true");
      if (toggleText) {
        toggleText.textContent = "閉じる"; // ヘッダーのSRテキストは「閉じる」に
      }
    }

    function toggleAccordion() {
      const isOpening = !item.classList.contains("is-open");
      if (isOpening) {
        openAccordion();
      } else {
        closeAccordion();
      }
    }

    header.addEventListener("click", toggleAccordion);

    header.addEventListener("keydown", function (event) {
      if (event.key === "Enter" || event.key === " ") {
        event.preventDefault();
        toggleAccordion();
      }
    });

    if (closeButton) {
      // 新しい閉じるボタンが存在する場合
      closeButton.addEventListener("click", closeAccordion); // クリックでアコーディオンを閉じる

      closeButton.addEventListener("keydown", function (event) {
        if (event.key === "Enter" || event.key === " ") {
          event.preventDefault();
          closeAccordion();
        }
      });
    }
  });
});

jQuery(document).ready(function ($) {
  $(".top_blog__slider").slick({
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    initialSlide: 2,
    centerPadding: "100px",
    dots: true,
    infinite: true,
    arrows: false,
    speed: 500,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1340,
        settings: {
          slidesToShow: 3,
          centerPadding: "100px",
        },
      },
      {
        breakpoint: 1080, // Medium Desktop
        settings: {
          slidesToShow: 3,
          centerPadding: "80px",
        },
      },
      {
        breakpoint: 768, // Tablet
        settings: {
          slidesToShow: 1, // タブレット以下では中央1枚に戻す (または3枚維持も可)
          centerPadding: "100px", // slidesToShow:1 の場合の見切れ
        },
      },
      {
        breakpoint: 568, // Small Tablet / Large Mobile
        settings: {
          slidesToShow: 1,
          centerPadding: "60px",
        },
      },
      {
        breakpoint: 480, // Mobile
        settings: {
          slidesToShow: 1,
          //   centerMode: false,
          centerPadding: "30px",
        },
      },
    ],
  });
});
