<div style="word-break: break-all;"  class=" col-md-3 ">
                 <div class="card z-depth-1 mt-4">
                  <div class="card-body">
                     <h5 class="card-title">Hitokoto</h5>
                     <p id="hitokoto">:D 获取中...也可能是获取失败啦，刷新试试?</p>
                    </div>
                  </div>
                 <div class="list-group z-depth-1 mt-4">
                      <a  href="#!" class="list-group-item list-group-item-action active disabled">
                          文章分类
                      </a>
                      <?php $this->widget('Widget_Metas_Category_List')
                        ->parse('<a href="{permalink}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">{name}<span class="badge badge-primary badge-pill text-right"> {count}</span></a>'); ?>
                  </div>
                  <div class="list-group z-depth-1 mt-4 ">
                      <a href="#!" class="list-group-item list-group-item-action active disabled">
                          最近的文章
                      </a>
                      <?php $this->widget('Widget_Contents_Post_Recent')
                        ->parse('<a href="{permalink}" class="list-group-item list-group-item-action">{title}</a>'); ?>
                  </div>
              </div>
            </div>
            </div>
            </div>
