//#BTNクリックで#MENUを表示.disp {display: none;}
$(function() {
    $(".menuNavi").click(function () {
        $("#menuNavi__menu").toggleClass("icon-menu");
        $("#menuNavi__menu").toggleClass("icon-close");
        $(".mainNavi").toggleClass("menu-open");
    });
});

//Scroll Rules
$(function(){
    if (window.matchMedia( "(max-width: 640px)" ).matches) {
        $(`a[href^="#"]`).click(function(){
            var speed = 500;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? "html" : href);
            var position = target.offset().top;
            var positionx = position - 50;
            $("html, body").animate({scrollTop:positionx}, speed, "swing");
            return false;
        });
    } else {
        $(`a[href^="#"]`).click(function(){
            var speed = 500;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? "html" : href);
            var position = target.offset().top;
            var positionx = position - 100;
            $("html, body").animate({scrollTop:positionx}, speed, "swing");
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
    }
    }]
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
document.addEventListener('DOMContentLoaded', (event) => {
    // videoThumbのclass名がつく要素を全取得
    let imgTags = document.getElementsByClassName('videoThumb');
    // ループ
    for(let i = 0; i < imgTags.length; i++) {
        let videoId = imgTags[i].getAttribute('data-video-id');
        imgTags[i].src = `https://img.youtube.com/vi/${videoId}/0.jpg`;
        imgTags[i].addEventListener('click', function() {
            openModal(videoId);
        });
    }

    // モーダルの要素を作成
    let modal = document.createElement('div');
    modal.id = 'modal';
    modal.style.display = 'none';
    modal.style.position = 'fixed';
    modal.style.zIndex = '3';
    modal.style.left = '0';
    modal.style.top = '0';
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.overflow = 'auto';
    modal.style.backgroundColor = 'rgba(0,0,0,0.4)';
    modal.addEventListener('click', function(event) {
        if(event.target === modal) {
            closeModal();
        }
    });
    // modalContentの要素を作成
    let modalContent = document.createElement('div');
    modalContent.className = 'modalContent';
    // iframeのYouTube要素を作成
    let videoPlayer = document.createElement('iframe');
    videoPlayer.id = 'videoPlayer';
    videoPlayer.width = '560';
    videoPlayer.height = '315';
    videoPlayer.frameBorder = '0';
    videoPlayer.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
    videoPlayer.allowFullscreen = true;
    // 閉じるボタンを作成
    let closeBtn = document.createElement('button');
    closeBtn.className = 'closeBtn';
    closeBtn.addEventListener('click', closeModal);

    modalContent.appendChild(videoPlayer);
    modalContent.appendChild(closeBtn);
    modal.appendChild(modalContent);
    document.body.appendChild(modal);
});
// モーダルモーダル関数
function openModal(videoId) {
    let modal = document.getElementById('modal');
    let videoPlayer = document.getElementById('videoPlayer');

    videoPlayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    modal.style.display = 'block';
}
// モーダルを閉じる関数を作成
function closeModal() {
    let modalContent = document.querySelector('.modalContent');
    modalContent.style.animation = "fadeOut 0.7s";
    
    setTimeout(function() {
        let modal = document.getElementById('modal');
        let videoPlayer = document.getElementById('videoPlayer');

        videoPlayer.src = '';
        modal.style.display = 'none';
        //Reset the animation so it plays on the next open
        modalContent.style.animation = "fadeIn 0.7s";
    }, 700);
}

// YouTubeモーダルここまで


// 画像拡大
$(function(){
    $('.gallery').modaal({
        type: 'image'
    });
  });
