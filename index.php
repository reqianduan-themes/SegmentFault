<?php
/**
 * 这是基于 Typecho 0.9 系统的一款主题，最大特点是简洁。
 * 
 * @package SegmentFault
 * @author Jason Xiang
 * @version 1.0.0
 * @link http://jasonxiang.com
 */
 
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post">
			<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li><?php _e('作者：'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li>
				<li><?php _e('时间：'); ?><?php $this->date(); ?></li>
				<li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
				<li><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
