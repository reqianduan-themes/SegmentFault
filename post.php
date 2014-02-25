<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post">
        <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <li><?php _e('作者：'); ?><?php $this->author(); ?></li>
            <li><?php _e('时间：'); ?><?php $this->date(); ?></li>
            <li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
        <p class="tags"><?php _e('相关主题：'); ?><?php $this->tags(' ', true, 'none'); ?></p>

		<p id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
            <span class="share-text">分享到：</span>
		    <span><a id="sideshare-weibo" title="新浪微博" class="bds_tsina"></a></span>
		    <span><a id="sideshare-qqzone" title="QQ空间" class="bds_qzone"></a></span>
		    <span><a id="sideshare-qqweibo" title="腾讯微博" class="bds_tqq"></a></span>
		    <span><a id="sideshare-qqfriend" title="QQ好友"  class="bds_sqq"></a></span>
		    <span><a id="sideshare-douban" title="豆瓣" class="bds_douban"></a></span>
		    <span><a id="sideshare-renren" title="人人网" class="bds_renren"></a></span>
		</p>

        <p class="license">除非特别声明，所有文章均为原创，转载请注明作者及原文链接。</p>
        <p>原文地址：<?php $this->permalink() ?></p>
    </article>

    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
