<?php

/**

 * 一套并不 Material Design 的 Material Design 主题
 * 主题代码高亮等使用说明请参见 blog.acg.vc/nichijou/Theme-TM.html  
 * 主题示例参见 tm.theme.acg.vc
 * 
 * @package TM 
 * @author Kiseopt
 * @version 1.0.6
 * @link http://blog.acg.vc
 */


if (!defined('__TYPECHO_ROOT_DIR__')) exit;

 $this->need('header.php');

 ?>

        <div class="container" >

        <div class="row" >

        <div class=" col-md-9">

            <?php while ($this->next()) : ?>

            <div  style="word-break: break-all; height:auto; max-width：100%"  class="row  hoverable mt-4 card">

            <div class=""style="width: 100%;">

                        <div class="card-body">

                        <div class="text-muted">

                          <h5 class="card-title text-center"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h5>

                          <h6 class="card-subtitle mb-2 ">时间:<?php $this->date('F j, Y'); ?> | 分类:<?php $this->category(','); ?></h6>

                          </div>

                          <p class="card-text">

                          <?php $this->content('<div class="text-center">- 阅读剩余部分 -</div>'); ?> </p>

                        </div>

                    </div>

                </div>

                <?php endwhile; ?>

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

                </div>

                <?php $this->need('sidebar.php'); ?>

                <script type="text/javascript" src="<?php $this->options->themeUrl('js/index.js'); ?>"></script>

<?php $this->need('footer.php'); ?>

