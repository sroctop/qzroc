<?php
/**
 * @author roc
 * @version 1.0
 * @link https://www.qzroc.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<div class="layui-container">
    <div class="layui-row layui-col-space15 main">
        <div class="layui-col-md9 layui-col-lg9">
            <?php while($this->next()): ?>
                <div class="title-article list-card">
                    <div class="list-pic"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><img src="<?php echo thumb($this); ?>" alt="<?php $this->title() ?>" class="img-full"></a></div>
                    <a href="<?php $this->permalink() ?>">
                        <h1><?php $this->title() ?></h1>
                        <p>
                            <?php $this->excerpt(300, '...'); ?>
                        </p>
                    </a>
                    <div class="title-msg">
                        <span><i class="layui-icon">&#xe705;</i> <?php $this->category(','); ?></span>
                        <span><i class="layui-icon">&#xe60e;</i> <?php $this->date('Y-m-d A'); ?> </span>
                        <span class="layui-hide-xs"><i class="layui-icon">&#xe62c;</i> <?php get_post_view($this); ?>℃</span>
                        <span class="layui-hide-xs"><i class="layui-icon">&#xe63a;</i> <?php $this->commentsNum('%d'); ?>条</span>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="page-navigator">
                <?php $this->pageNav('«', '»', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'layui-laypage layui-laypage-molv', 'itemTag' => '', 'currentClass' => 'current', )); ?>
            </div>
        </div>
        
        <?php $this->need('sidebar.php'); ?>

    </div>
</div>

<?php $this->need('footer.php'); ?>