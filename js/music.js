(function () {
  console.log("init");
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
    $(".music-online-content")
      .width(($(window).width() - 50) + 'px')
      .height($(window).height() + 'px');
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
      event.stopPropagation();
      $(".music-online-content")
        .width(($(window).width() - 50) + 'px')
        .height($(window).height() + 'px');
      // $(".music-online-button").style("left", ($(window).width() - 50) + 'px')
    })
  })


})()