<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Worksheet';
?>

<h1>Complement Questions</h1>

<form action="<?=Url::to(['site/sheet'])?>" method="post">
    
    <p>Select the following problems by clicking on the check-box next to the problem and click <input type="submit" value="done"> to make the worksheet.</p>
    
    <div class="row">
        <?php for($i = 0; $i <= 100; $i++):?>
            <div class="col-sm-3" style="margin-bottom:10px">
                <input type="checkbox" name="p[]" value="100 - <?=$i?> ="> \(100 - <?=$i?> =\)
            </div>
        <?php endfor;?>
    </div>
</form>