//#BTNクリックで#MENUを表示.disp {display: none;}
$(function () {
  $(".menuNavi").click(function () {
    $("#menuNavi__menu").toggleClass("icon-menu");
    $("#menuNavi__menu").toggleClass("icon-close");
    $(".mainNavi").toggleClass("menu-open");
  });
});

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

// YouTubeモーダルここから
document.addEventListener("DOMContentLoaded", (event) => {
  // videoThumbのclass名がつく要素を全取得
  let imgTags = document.getElementsByClassName("videoThumb");
  // ループ
  for (let i = 0; i < imgTags.length; i++) {
    let videoId = imgTags[i].getAttribute("data-video-id");
    imgTags[i].src = `https://img.youtube.com/vi/${videoId}/0.jpg`;
    imgTags[i].addEventListener("click", function () {
      openModal(videoId);
    });
  }

  // モーダルの要素を作成
  let modal = document.createElement("div");
  modal.id = "modal";
  modal.style.display = "none";
  modal.style.position = "fixed";
  modal.style.zIndex = "3";
  modal.style.left = "0";
  modal.style.top = "0";
  modal.style.width = "100%";
  modal.style.height = "100%";
  modal.style.overflow = "auto";
  modal.style.backgroundColor = "rgba(0,0,0,0.4)";
  modal.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });
  // modalContentの要素を作成
  let modalContent = document.createElement("div");
  modalContent.className = "modalContent";
  // iframeのYouTube要素を作成
  let videoPlayer = document.createElement("iframe");
  videoPlayer.id = "videoPlayer";
  videoPlayer.width = "560";
  videoPlayer.height = "315";
  videoPlayer.frameBorder = "0";
  videoPlayer.allow =
    "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture";
  videoPlayer.allowFullscreen = true;
  // 閉じるボタンを作成
  let closeBtn = document.createElement("button");
  closeBtn.className = "closeBtn";
  closeBtn.addEventListener("click", closeModal);

  modalContent.appendChild(videoPlayer);
  modalContent.appendChild(closeBtn);
  modal.appendChild(modalContent);
  document.body.appendChild(modal);
});
// モーダルモーダル関数
function openModal(videoId) {
  let modal = document.getElementById("modal");
  let videoPlayer = document.getElementById("videoPlayer");

  videoPlayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
  modal.style.display = "block";
}
// モーダルを閉じる関数を作成
function closeModal() {
  let modalContent = document.querySelector(".modalContent");
  modalContent.style.animation = "fadeOut 0.7s";

  setTimeout(function () {
    let modal = document.getElementById("modal");
    let videoPlayer = document.getElementById("videoPlayer");

    videoPlayer.src = "";
    modal.style.display = "none";
    //Reset the animation so it plays on the next open
    modalContent.style.animation = "fadeIn 0.7s";
  }, 700);
}

// YouTubeモーダルここまで

// 画像拡大
$(function () {
  $(".gallery").modaal({
    type: "image",
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
window.addEventListener("resize", adjustBodyPadding);
window.addEventListener("load", adjustBodyPadding);

function adjustBodyPadding() {
  const headerHeight = document.querySelector("header").offsetHeight;
  document.body.style.paddingTop = headerHeight + "px";
}
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
