<?php

/* @var $model array */
?>
<div class="app_params_settings-main-index">

    <?php foreach($model as $name => $file):?>
        <p><a href="<?=Yii::$app->urlManager->createUrl(['/params/main/edit', 'file' => $file])?>"><?=$name?></a> </p>
    <?php endforeach;?>
    
</div>
