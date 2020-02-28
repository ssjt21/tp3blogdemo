<?php if (!defined('THINK_PATH')) exit(); echo ($artic["title"]); ?><br/> <?php echo (date('y-m-d',$artic["addtime"])); ?>
<br/> <?php echo ($artic["author"]); ?>
<br/>
<img src="/Test/wall/Public/<?php echo ($artic["pic"]); ?>" alt=""><br/> <?php echo ($artic["content"]); ?>
<br>