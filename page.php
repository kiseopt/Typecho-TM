<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container" >
        <div class="row" >
        <div class=" col-md-9"  style="height:100%;">
          <div class="row mt-4 card ">
                        <div class="card-body "style="width: 100%;">
                          <h5 class="card-title text-center"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h5>
                          <p class="card-text">
                          <?php $this->content('<div class="text-center">- 阅读剩余部分 -</div>'); ?> </p>
                         </div>
            </div>
                <div class="row mt-3">
                    <nav id='page233'>
<!-- COP1 -->
                      </nav>
                </div>
                </div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

