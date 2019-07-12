<div class="row mt-3 card">
<div  class="card-body ">
  <!--显示评论总条数-->
  <h6  class="card-subtitle mb-2 text-muted"><i class="fas fa-comment"></i> 既然来了，那就试着讨论一下吧~，现在<?php $this->commentsNum(_t('还没有评论噢'), _t('已有一条评论哒,不如试着加入讨论?'), _t('有 %d 条评论啦~不如试着加入讨论?')); ?></h6>
  <br>

  <?php $this->comments()->to($comments); ?>
<?php if ($comments->have()): ?><!--如果有评论的才会输出-->
 
    <!--输出评论列表-->
<?php $comments->listComments(); ?>
    <!--评论分页-->
<?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>  
<?php endif; ?>
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<div >
 <li id="li-<?php $comments->theId(); ?>" style="list-style:none;" class=" comment-body<?php 
if ($comments->_levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass; 
?>">
    <div  id="<?php $comments->theId(); ?>" class="row" >
    <div class="col col-sm-1">
     <?php $comments->gravatar('', ''); ?>
    </div>
    <div class="col ">
    <cite class="font-weight-bold text-uppercase"><a ><?php $comments->author(); ?></a></cite> <a><?php $comments->date("发表于Y-m-d"); ?></a> <?php $comments->reply(); ?> 
    <?php $comments->content(); ?>
    </div>
    </div>
    <?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
    
<?php } ?>
</li>

    </div  >
    
<?php } ?>

<div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>

            <div class="md-form input-group">
  <div class="input-group-prepend">
    <span class="input-group-text md-addon">发表评论</span>
  </div>
  <input type="text" name="author" id="author"  value="<?php $this->remember('author'); ?>" required class="form-control" placeholder="昵称">
  <input type="email" name="mail" id="mail"value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> type="text" class="form-control" placeholder="邮箱">
  <input type="url" name="url" id="url"  placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> class="form-control" placeholder="个人网站">
    </div>

            <?php endif; ?>
  <div class="md-form input-group mb-3">
  <input type="text" class="form-control" name="text" id="textarea"  required><?php $this->remember('text'); ?>
  <div class="input-group-append">
    <button class="btn btn-md btn-primary m-0 px-3" type="submit" ><?php _e('提交评论'); ?></button>
  </div>
</div>



    	</form>
    </div>























</div>
</div>



