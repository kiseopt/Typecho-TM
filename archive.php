<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container" >
        <div class="row" >
        <div  style="word-break: break-all; height:auto; max-width：100% ;min-width: 100%" class="mt-4"  id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 的搜索结果'),
            'search'    =>  _t('关键字 %s 的搜索结果'),
            'tag'       =>  _t('标签 %s 的搜索结果'),
            'author'    =>  _t('作者 %s 的文章搜索结果')
        ), '', ''); ?></h3>
        </div>
        <div class=" col-md-9">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <div  style="word-break: break-all;  max-width：100%"  style="width: 100%;" class="row mt-4 hoverable card">

                    <div style="width: 100%;" class="card-body ">
            	        <h5 class="card-title text-center post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h5>
                        <h6  class="card-subtitle mb-2 text-muted"><?php _e('时间: '); ?> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time> | <?php _e('分类: '); ?><?php $this->category(','); ?> </h6>
                        <div class="post-content card-text" itemprop="articleBody">
        		    	    <?php $this->content('<div class="text-center">- 阅读剩余部分  -</div>'); ?>
                        </div>
                    </div>
                </div>
            </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post" >
                <h2 class="post-title mt-4" ><?php _e('404040404040404'); ?></h2>
            </article>
        <?php endif; ?>

        <div class="row mt-3">
                    <nav id='page233' >
                    <?php $this->pageNav(
                      '&laquo;',
                      '&raquo;',
                      '5',
                      '···',
                      array(
                        'wrapTag' => 'ul', 'wrapClass' => 'pagination pg-blue',
                        'itemTag' => 'li', 'textTag' => 'a',
                        'currentClass' => 'page-item active', 'itemClass' => 'page-item', 'prevClass' => 'page-item ',
                        'nextClass' => 'page-item',
                      )
                    ); ?>
                      </nav>
                </div>
    </div><!-- end #main -->
    <?php $this->need('sidebar.php'); ?>

	<?php $this->need('footer.php'); ?>
