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

<?php $this->footer(); ?>
</body>
</html>
