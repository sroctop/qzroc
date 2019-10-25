(function () {
  console.log("init");
  let setMusicNumber = 0;
  // 窗口大小改变时
  $(window).resize(function () {
    $(".music-online-content")
      .width(($(window).width() - 50) + 'px')
      .height(($(window).height() - 60) + 'px');
  });
  // 展开播放侧键
  $(".music-content-show").click(() => {
    $(".music-content").css("left", 0);
    $(".music-content-hide").show();
    $(".music-content-show").hide();
  })
  // 收起播放侧键
  $(".music-content-hide").click(() => {
    $(".music-content").css("left", "-66px");
    $(".music-content-hide").hide();
    $(".music-content-show").show();
  })
  // 启动音乐播放器
  $(".music-content-img-block img").click(() => {

    let musicSetWidth = 270;
    let musicSetHeight = 508;
    let musicWidth = $(window).width() - 50;
    let musicHeight = $(window).height() - 60;

    if (musicWidth >= 320) { // 如果屏幕宽度大于320，则只有320 ，如果小于320，则宽度为当前屏幕宽度
      musicSetWidth = 320;
    } else if (musicWidth <= 320) {
      musicSetWidth = musicWidth;
    }

    if (musicHeight >= 508) { // 如果屏幕高度大于508，则只有508 ，如果小于508，则高度为当前屏幕高度
      musicSetHeight = 508;
    } else if (musicHeight <= 508) {
      musicSetHeight = musicHeight;
    }

    $(".music-online-content")
      .width(musicSetWidth + 'px')
      .height(musicSetHeight + 'px');
    $(".music-content").hide();
    $(".music-online").show();

    // 点击外侧内容，隐藏播放器
    $(".music-online").click(() => {
      $(".music-content").show();
      $(".music-online").hide();

      $(".music-content").css("left", "-66px");
      $(".music-content-hide").hide();
      $(".music-content-show").show();
    })

    // 点击关闭按钮
    $(".music-online-button-close").click(() => {
      // console.log("close");
      event.stopPropagation();
      $(".music-content").show();
      $(".music-online").hide();

      $(".music-content").css("left", "-66px");
      $(".music-content-hide").hide();
      $(".music-content-show").show();
    })

    // 放大播放器
    $(".music-online-button-max").click(() => {
      setMusicNumber++;
      (setMusicNumber % 2 === 0) ? music_max() : music_min()
      event.stopPropagation();
      $(".music-online-content")
        .width(($(window).width() - 50) + 'px')
        .height(($(window).height() - 60) + 'px');

      function music_max() {
        $(".music-online-content")
          .width(($(window).width() - 50) + 'px')
          .height(($(window).height() - 60) + 'px');
      }

      function music_min() {
        $(".music-online-content")
          .width(320 + 'px')
          .height(508 + 'px');
      }
    })
  })
})()