<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container" >
        <div class="row" >
        <div class=" col-md-9">

<div  class="row  hoverable mt-4 card" id="main" role="main">
    <article style="width: 100%;" class="post card-body" itemscope itemtype="http://schema.org/BlogPosting">

        <div class="post-meta">
        <h5 class="card-title text-center"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h5>
        <p class="text-muted">时间:<?php $this->date('F j, Y'); ?> | 分类:<?php $this->category(','); ?></p>
        </div>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>

    </article>
    </div>
    <?php $this->need('comments.php'); ?>
    </div><!-- end #main-->
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>








   



