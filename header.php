<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/mdb.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/i.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('code/prism.css'); ?>">
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/page.js'); ?>"></script>
    <?php $this->header(); ?>
<?// header("Strict-Transport-Security: max-age=63072000; includeSubdomains; preload"); ?>
<!-- 启用HSTS -->
</head>
<body >
  <!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><strong><?php $this->options->title() ?></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id="nav_menu">
              <li class="nav-item" ><a class="nav-link" href="<?php $this->options->siteUrl(); ?>">主页</a></li>
              <?php $this->widget('Widget_Contents_Page_List')
                ->parse('<li class="nav-item" ><a class="nav-link" href="{permalink}">{title}</a></li>'); ?>
        </ul>

          <form class="form-inline ml-auto" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
              <div class="md-form my-0">
              <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
               <input class="form-control mr-sm-2" type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" aria-label="Search" style=" height: 0.8em; ">
              </div>
            </form>

        </div>
      </nav>
      <div class="view intro-2 z-depth-1" style="">
      </div>
    </header>
