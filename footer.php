<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="footer">
    <div class="layui-col-md12 t-copy">
        <span class="layui-breadcrumb">
            <span>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?>.个人博客</a></span>
            <span class="layui-hide-xs">Poweed by <a href="https://www.qzroc.com/" target="_blank">Qzroc</a></span>
            <span>网站备案号：鲁ICP备18036475号-1</span>
            <span><script type="text/javascript" src="https://s4.cnzz.com/z_stat.php?id=1278073340&web_id=1278073340"></script></span>
        </span>
    </div>
</div>

<div class="qzroc-music">
<div class="music-content">
    <div class="music-content-img">
      <div class="music-content-img-block">
        <img src="http://qiniu.qzroc.com/qzroc-music-bg.png" alt="">
      </div>
    </div>
    <div class="music-content-show">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
        <path d="M22 16l-10.105-10.6-1.895 1.987 8.211 8.613-8.211 8.612 1.895 1.988 8.211-8.613z"></path>
      </svg>
    </div>
    <div class="music-content-hide">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
        <path d="M22 16l-10.105-10.6-1.895 1.987 8.211 8.613-8.211 8.612 1.895 1.988 8.211-8.613z"></path>
      </svg>
    </div>
  </div>

  <div class="music-online">
    <div class="music-online-content">
      <iframe src="https://mp3.qzroc.com/" frameborder="0"></iframe>
      <div class="music-online-button">
        <div class="music-online-button-close music-online-button-info">×</div>
        <div class="music-online-button-max music-online-button-info">∞</div>
      </div>
    </div>

  </div>
</div>

<?php $this->footer(); ?>
</body>
</html>
